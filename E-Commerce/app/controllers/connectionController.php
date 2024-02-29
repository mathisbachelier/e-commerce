<?php
namespace App\controllers;

use App\Models\User;

class connectionController extends Controller{

    public function login()
    {
        return $this->view("auth.index");
    }

    public function create()
    {
        return $this->view("auth.create");
    }

    public function loginPost()
    {
        $user = new User($this->getDB());
        $user = $user->getByUsername($_POST['username']);

        if(password_verify($_POST['password'],$user->password) ){      
           if($user->admin == true)
           {
                $_SESSION['auth'] = $user->admin;
                return header('location: /mvc/admin/posts?success=true');
           }
        } else {
            return header('location: /mvc/login');
        }
    }

    // public function logout()
    // {
    //         session_destroy();
    //         return header('location: /mvc/');
    // }
}