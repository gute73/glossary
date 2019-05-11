<?php

use Illuminate\Database\Eloquent\Model as Model;

class User extends Model
{

  protected $table = 'users';

  protected $fillable = ['first_name', 'last_name', 'username', 'email', 'password_hash'];

  public function glossaries()
  {
    return $this->hasMany('models/glossary');
  }

  public function translations()
  {
    return $this->hasMany('models/translation');
  }

}