<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

session_start();

require '../vendor/autoload.php';
require '../config/app.php';

switch (isset($_GET['page']) ? $_GET['page'] : '/') {
    case 'test':
        $controller = new \App\Controllers\TestController();
        $controller->index();
        break;
    case '/':
        $controller = new \App\Controllers\TaskController();
        $controller->allTasks();
        break;
    case 'news':
        $controller = new \App\Controllers\TaskController();
        $controller->allTasks();
        break;
    case 'create':
        $controller = new \App\Controllers\TaskController();
        $controller->create();
        break;
    case 'store':
        $controller = new \App\Controllers\TaskController();
        $controller->store();
        break;
    case 'show':
        $controller = new \App\Controllers\TaskController();
        $controller->show();
        break;
    case 'edit':
        $controller = new \App\Controllers\TaskController();
        $controller->edit();
        break;
    case 'update':
        $controller = new \App\Controllers\TaskController();
        $controller->update();
        break;
    case 'login':
        $controller = new \App\Controllers\AdminController();
        $controller->login();
        break;
    case 'logout':
        $controller = new \App\Controllers\AdminController();
        $controller->logout();
        break;
    default:
        exit('404 error');
        break;
}