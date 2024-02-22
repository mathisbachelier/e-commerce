<?php
namespace App\Controllers;
use App\Models\User;

class UserManagementController extends Controller{

    public function index(){

        $model = new User($this->getDB());
        $users = $model->all();

        return $this->view('userManagement.userList', compact('users'));
    }
public function deleteUser($Id_user)
{
    $model = new User($this->getDB());
    $deleted = $model->destroyUser($Id_user);

    return header('location: /E-Commerce-BTS-SIO/E-Commerce/user_management');
}
} 
