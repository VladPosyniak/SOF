<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 07.05.2017
 * Time: 14:00
 */

namespace App\Models;
use App\Models\Model;

class Admin extends Model
{
    const login = 'admin';
    const password = '123';

    public function login(){
        if (!isset($_SESSION['admin'])){
            if (self::login === $_POST['login'] && self::password === $_POST['password']){
                $_SESSION['admin'] = true;
                return true;
            }
            else{
                return false;
            }
        }
        else{
            return false;
        }
    }
}