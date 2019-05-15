<?php

class Home extends Controller
{

  public function index()
  { 
    session_start();
    $glossaries = "";
    if (isset($_SESSION) && $_SESSION == true)
    {
      $user_id = $_SESSION['user_id'];
      $glossaries = Glossary::all()->where('user_id', $user_id)->reverse();
    }
    $this->view('home/index', $glossaries);
  }

  public function about()
  {
    $this->view('home/about');
  }

}