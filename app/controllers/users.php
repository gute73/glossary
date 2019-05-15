<?php

class Users extends Controller
{

  public function new($errors = "")
  {
    $this->view('user/new', $errors);
  }

  public function create()
  {

    $errors = array();

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $email = strtolower($email);
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    if (empty($first_name) || empty($last_name) || empty($username) || empty($email) || empty($password))
    {
      array_push($errors, "All fields are required.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
      array_push($errors, "Invalid email format.");
    }

    if (strlen($password) < 8)
    {
      array_push($errors, "Password must be at least 8 characters long.");
    }

    if (User::where('email', $email)->first())
    {
      array_push($errors, "Email address is already associated with a user account.");
    }

    if (empty($errors))
    {

      $user = User::create(['first_name' => $first_name, 'last_name' => $last_name, 'username' => $username, 'email' => $email, 'password_hash' => $password_hash]);
      session_start();
      $_SESSION['user_id'] = $user->getKey();

      $this->view('home/index');
    }
    else
    {
      Users::new($errors);
    }
  }

}