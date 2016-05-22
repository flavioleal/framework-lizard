<?php

/**
 * Created by PhpStorm.
 * User: flavioleal
 * Date: 21/05/2016
 * Time: 11:12
 */
use Illuminate\Database\Eloquent\Model as Eloquent;
class User extends Eloquent
{
    public $nome;
    protected $fillable = ['username', 'email'];
}