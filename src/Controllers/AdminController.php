<?php


namespace App\Controllers;
use App\Models\Admin;

class AdminController extends Controller
{

    public function login(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $admin = new Admin();
            if ($admin->login()){
                $this->redirect('/');
            }
            else{
                $this->redirect($_SERVER['HTTP_REFERER'],'Неверные учетные данные или вход уже был выполнен.');
            }

        }
        else{
            $this->getSmarty()->display('login.tpl');
        }
    }

    public function logout(){
        if (isset($_SESSION['admin'])){
            $_SESSION['admin'] = null;
            $this->redirect('/');
            exit();
        }
        else{
            $this->redirect('/','Вы не авторизованы');
            exit();
        }
    }

    public function check(){
        if (isset($_SESSION['admin'])){
            return true;
        }
        else{
            return false;
        }
    }
}