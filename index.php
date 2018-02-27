<?php

session_start();


if(isset($_SESSION['user_name'])) {

    if(isset($_GET['controller'])) {
        $controller = $_GET['controller'];
        $method = $_GET['method'];

        $controllerName = $controller.'Controller';

        include 'controllers/'.$controllerName.'.php';

        $obj = new $controllerName();
        $obj-> $method();
    }
    else {
        include 'controllers/ArticlesController.php';

        $obj = new ArticlesController();
        $obj-> setArticles();
    }

}

elseif(isset($_POST['login'])) {

    include 'controllers/LoginController.php';

    $obj = new LoginController();
    $obj-> login();
}

elseif(isset($_POST['register'])) {

    include 'controllers/LoginController.php';

    $obj = new LoginController();
    $obj-> register();
}

else {
    include 'controllers/LoginController.php';

    $obj = new LoginController();
    $obj-> blank();
}


