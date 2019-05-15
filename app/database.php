<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
  'host' => 'us-cdbr-iron-east-02.cleardb.net',
  'driver' => 'mysql',
  'username' => 'b8d38bd5114bd2',
  'password' => '476728ec',
  'database' => 'heroku_83e6aec7b812598',
  'charset' => 'utf8',
  'prefix' => ''
]);

$capsule->bootEloquent();