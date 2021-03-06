<?php

use Illuminate\Database\Eloquent\Model as Model;

class Term extends Model
{

  protected $table = 'terms';

  protected $fillable = ['term'];

  public function translations()
  {
    return $this->hasMany('Translation');
  }

  public function glossary()
  {
    return $this->belongsTo('Glossary');
  }

}