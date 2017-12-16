<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 16.12.2017
 * Time: 18:36
 */

namespace App\Controllers;


class HomeController extends Controller
{
    public function index(){
        $this->getSmarty()->display('home.tpl');
    }
}