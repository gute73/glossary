<?php

use Illuminate\Database\Eloquent\Model as Model;

class Translation extends Model
{

  protected $table = 'translations';

  protected $fillable = ['language', 'translation', 'comment'];

  public function user()
  {
    return $this->belongsTo('models/user');
  }

  public function term()
  {
    return $this->belongsTo('models/term');
  }

}