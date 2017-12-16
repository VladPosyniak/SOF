<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

session_start();

require '../vendor/autoload.php';
require '../config/app.php';

$url = explode('/',explode('?',$_SERVER['REQUEST_URI'])[0]);
unset($url[0]);
foreach ($url as $key => $item){
    $url[$key] = trim($item);
}


if (isset($url[1]) && $url[1] != ''){
    $controller = $url[1];
    if (isset($url[2]) && $url != ''){
        $method = $url[2];
    }
    else{
        $method = 'index';
    }
}
else{
    $controller = DEFAULT_CONTROLLER;
    $method = DEFAULT_METHOD;
}

$controller =  '\App\Controllers\\'.$controller.'Controller';
$controller = new $controller();
$controller->$method();

