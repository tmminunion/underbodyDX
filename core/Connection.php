<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => $_ENV['DB_CONNECTION'],
    'host'      => $_ENV['DB_HOST'],
    'port'      => $_ENV['DB_PORT'],
    'database'  => $_ENV['DB_DATABASE'],
    'username'  => $_ENV['DB_USERNAME'],
    'password'  => $_ENV['DB_PASSWORD'],
    'charset'   => $_ENV['DB_CHARSET'],
    'collation' => $_ENV['DB_COLLATION'],
    'prefix'    => '',
]);


// $capsule->addConnection([
//     'driver' => 'sqlite',
//     'database' => __DIR__ . '/database/database.sqlite',
//     'prefix' => '',
// ]);

$capsule->setAsGlobal();
$capsule->bootEloquent();
