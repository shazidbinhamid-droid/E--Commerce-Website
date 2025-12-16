<?php

class Controller
{
    public function view($view, $data = [])
    {
        if (file_exists('../app/views/' . $view . '.php')) {
            extract($data);
            require_once '../app/views/' . $view . '.php';
        } else {
            die("View does not exist: " . $view);
        }
    }

    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    public function redirect($url)
    {
        $scriptName = dirname($_SERVER['SCRIPT_NAME']);
        // If scriptName is just /, don't prepend it, otherwise clean it up
        $base = ($scriptName === '/' || $scriptName === '\\') ? '' : $scriptName;
        header('Location: ' . $base . '/' . ltrim($url, '/'));
        exit;
    }
}
