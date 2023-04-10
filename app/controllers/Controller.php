<?php

class Controller
{
    public static function view($view_path, $data = [])
    {
        require_once '../views/' . $view_path . '.php';
    }
}
