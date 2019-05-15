<?php

class Terms extends Controller
{

  public function show($term_id)
  {
    $this->view('term/show', $term_id);
  }

}