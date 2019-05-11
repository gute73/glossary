<?php

class User extends Controller
{

  public function new()
  {
    $this->view('user/signup');
  }

  public function build()
  {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    User::create(['first_name' => $first_name, 'last_name' => $last_name, 'username' => $username, 'email' => $email, 'password_hash' => $password_hash]);
  }

  public function show()
  {

  }

}