<?php

class Login extends Controller
{

  public function new($errors = "")
  {
    $this->view('login/new', $errors);
  }

  public function create()
  {
    $errors = array();

    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password))
    {
      array_push($errors, "All fields are required.");
    }

    if (!($user = User::where('email', $email)->first()))
    {
      array_push($errors, "Email not found.");
    }
    

    if (empty($errors))
    {
      if (password_verify($password, $user->password_hash))
      {
        session_start();
        $_SESSION['user_id'] = $user->getKey();
        $this->view('home/index');
      }
      else
      {
        Login::new(["Incorrect email/password combination."]);
      }
    }
    else
    {
      Login::new($errors);
    }
  }

  public function destroy()
  {
    session_start();
    $_SESSION = array();
    session_destroy();

    $this->view('home/index');
  }

}