<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
  'driver' => 'mysql',
  'host' => 'localhost',
  'username' => 'root',
  'password' => '',
  'database' => 'glossary_db',
  'charset' => 'utf8',
  'prefix' => ''
]);

$capsule->bootEloquent();