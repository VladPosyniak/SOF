<?php

namespace App\Controllers;
use App\Models\Tasks;


class TestController extends Controller
{

    public function index(){
        $test = 'Hello, i`m a test page!';
        include '/../Resources/test.php';
    }
}