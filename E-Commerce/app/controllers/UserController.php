<?php
namespace App\controllers;

use App\Models\User;

class UserController extends Controller{

    public function createUser()
    {
        $user = new User($this->getDB());
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $_POST['role'] = 2;
        $count = $user->countByValue($_POST['email'], 'email');
        if($count -> nb == 0)
        {
            $user->create($_POST);
        }

        return $this->view("auth.index");
    }

    public function loginUser()
    {
        $user = new User($this->getDB());
        $user = $user->findByColumn($_POST['email'], 'email');

        if(password_verify($_POST['password'],$user->password) ){      
           if($user->role == true)
           {
                $_SESSION['auth'] = $user->role;
                return $this->view("homepage.index");
           }
        } else {
            return $this->view("auth.index");
        }
    }
}