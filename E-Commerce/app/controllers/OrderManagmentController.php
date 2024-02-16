<?php
namespace App\Controllers;

use App\Models\OrderManagmentModel;


class OrderManagmentController extends Controller{

    public function index(){
        $model = new OrderManagmentModel($this->getDB());
        $orders = $model->all();

        
        
        return $this->view('oders', compact('orders'));
    }
    }

