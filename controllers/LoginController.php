<?php

include 'Controller.php';

class LoginController extends Controller
{


    public function register() {
        $this->getModel('Login');
        $model = new LoginModel();
        $model->insert();
    }

    public function blank() {
        $this->getView('Login');
    }

    public function login() {
        $this->getModel('Login');
        $model = new LoginModel();
        $model->checkUser();
    }

    public function doLogout() {
        $this->getModel('Login');
        $model = new LoginModel();
        $model->logout();

        $this->getView('login');
    }

}