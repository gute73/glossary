<?php

class Glossaries extends Controller
{

  public function index()
  {
    $glossaries = Glossary::all()->reverse();
    $this->view('glossary/index', $glossaries);
  }

  public function new($user_id, $errors = "")
  {
    $this->view('glossary/new', array($user_id, $errors));
  }

  public function create($user_id)
  {
    $errors = array();

    $topic = $_POST['topic'];
    $term1 = $_POST['term1'];
    $term2 = $_POST['term2'];
    $term3 = $_POST['term3'];
    $term4 = $_POST['term4'];
    $term5 = $_POST['term5'];

    if (empty($topic))
    {
      array_push($errors, "The topic field is required.");
    }

    if (empty($term1) || empty($term2) || empty($term3))
    {
      array_push($errors, "At least three terms are required.");
    }
    
    if (empty($errors))
    {
        $user = User::find($user_id);
        $glossary = $user->glossaries()->create(['topic' => $topic]);
        $term_1 = $glossary->terms()->create(['term' => $term1]);
        $term_2 = $glossary->terms()->create(['term' => $term2]);
        $term_3 = $glossary->terms()->create(['term' => $term3]);

        if (!(empty($term4)))
        {
          $term_4 = $glossary->terms()->create(['term' => $term4]);
        }

        if (!(empty($term5)))
        {
          $term_5 = $glossary->terms()->create(['term' => $term5]);
        }

        $glossary_id = $glossary->getKey();
        Glossaries::show($glossary_id);
    }
    else
    {
      Glossaries::new($user_id, $errors);
    }
  }

  public function show($glossary_id)
  {
    $this->view('glossary/show', $glossary_id);
  }

  public function search()
  {
    $searchvalue = $_POST['searchvalue'];
    $searchresults = Glossary::query()->where('topic', 'LIKE', $searchvalue)->get();

    $this->view('glossary/index', $searchresults);
  }

}