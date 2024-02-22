<?php
namespace App\Controllers;

use App\Models\OrderManagementModel;


class OrderManagementController extends Controller{

    public function index(){
        $model = new OrderManagementModel($this->getDB());
        $orders = $model->all();

        
        
        return $this->view('oders', compact('orders'));
    }
    public function destroy(int $id){
        $model = new OrderManagementModel($this->getDB());
        $model->destroy($id);
        
        return header('location: /e-commerce-BTS-SIO/E-Commerce/orders/');
        
    }
    public function show(int $id)
    {
      $orders = new OrderManagementModel($this->getDB());
      $order =$orders->findById($id);
       
         return $this->view("order",compact('order'));
    }
    }

