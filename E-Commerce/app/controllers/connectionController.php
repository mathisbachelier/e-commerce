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
    

    // public function logout()
    // {
    //         session_destroy();
    //         return header('location: /mvc/');
    // }
}