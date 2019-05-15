<?php

use Illuminate\Database\Eloquent\Model as Model;

class Translation extends Model
{

  protected $table = 'translations';

  protected $fillable = ['language', 'translation', 'comment'];

  public function user()
  {
    return $this->belongsTo('User');
  }

  public function term()
  {
    return $this->belongsTo('Term');
  }

}