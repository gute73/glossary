<?php

use Illuminate\Database\Eloquent\Model as Model;

class Glossary extends Model
{

  protected $table = 'glossaries';

  protected $fillable = ['topic'];

  public function terms()
  {
    return $this->hasMany('models/term');
  }

  public function user()
  {
    return $this->belongsTo('models/user');
  }

}