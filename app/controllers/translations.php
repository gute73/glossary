<?php

class Translations extends Controller
{

  public function index()
  {

  }

  public function new($terms_id, $errors = "")
  {
    $this->view('translation/new', array($terms_id, $errors));
  }

  public function create($term_id)
  {
    session_start();
    $errors = array();

    $language = $_POST['language'];
    $tr = $_POST['translation'];
    $comment = $_POST['comment'];

    if (empty($tr))
    {
      array_push($errors, "The translation field is required.");
    }

    if (empty($language))
    {
      array_push($errors, "The language field is required.");
    }

    if (empty($comment))
    {
      $comment = "no comment";
    }
    
    if (empty($errors))
    {
        $translation = new Translation;
        $translation->user_id = $_SESSION['user_id'];
        $translation->term_id = $term_id;
        $translation->language = $language;
        $translation->translation = $tr;
        $translation->comment = $comment;
        $translation->save();

        $this->view('term/show', $term_id);
    }
    else
    {
      Translations::new($term_id, $errors);
    }
  }

}