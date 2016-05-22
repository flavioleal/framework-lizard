<?php

/**
 * Created by PhpStorm.
 * User: flavioleal
 * Date: 21/05/2016
 * Time: 02:31
 */
class Home extends Controller
{
    public function index($nome = '', $sobrenome = '')
    {
       $this->view('home/index', ['nome' => $nome]);
    }
    public function test(){
        echo 'home/test';
    }
}