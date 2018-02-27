<?php

class Model {


    public function __construct()
    {

        include 'config/Config.php';

        $config = new Config();

        $this->conn = new mysqli($config->server, $config->user, $config->password, $config->name);

    }

}