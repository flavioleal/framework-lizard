<?php
/**
 * Created by PhpStorm.
 * User: flavioleal
 * Date: 22/05/2016
 * Time: 11:29
 */
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => '127.0.0.1',
    'username' => 'root',
    'password' => '',
    'database' => 'lizard',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => ''

]);
$capsule->bootEloquent();