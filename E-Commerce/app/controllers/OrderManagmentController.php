<?php
namespace App\Controllers;

use App\Models\OrderManagmentModel;


class OrderManagmentController extends Controller{

    public function index(){
        $model = new OrderManagmentModel($this->getDB());
        $orders = $model->all();

        
        
        return $this->view('oders', compact('orders'));
    }
    public function destroy(int $id){
        $model = new OrderManagmentModel($this->getDB());
        $model->destroy($id);
        
        return header('location: /e-commerce-BTS-SIO/E-Commerce/orders/');
        
    }
    public function show(int $id)
    {
      $orders = new OrderManagmentModel($this->getDB());
      $order =$orders->findById($id);
       
         return $this->view("order",compact('order'));
    }
    }

