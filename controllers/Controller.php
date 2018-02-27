<?php

class Controller
{


    public function getModel($name) {

        $name = $name.'Model';
        $path = 'models/'.$name.'.php';

        include $path;

    }

    public function getView($name) {

        $name = $name.'View';
        $path = 'views/'.$name.".php";
        include $path;

    }
}