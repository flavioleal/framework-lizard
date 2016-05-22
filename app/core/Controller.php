<?php

/**
 * Created by PhpStorm.
 * User: flavioleal
 * Date: 21/05/2016
 * Time: 02:26
 */
class Controller
{
    public function model($model)
    {
        require_once '../app/models/'. $model .'.php';
        return new $model();
    }

    public function view($view, $data = [])
    {
        require_once '../app/views/'. $view .'.php';
    }

}