<?php
namespace App\Controllers;

use App\Models\Orders;


class OrderManagementController extends Controller{

    public function index(){
        $model = new Orders($this->getDB());
        
        $orders = $model->getOrders();
        return $this->view('orderManagement.orders', compact('orders'));
    }
    public function destroy(int $id){
        $model = new Orders($this->getDB());
        
        $model->rejectOrder($id);
        
        return header('location: /e-commerce-BTS-SIO/E-Commerce/orderManagement/orders/');
        
    }
    public function show(int $id)
        {
        $orders = new Orders($this->getDB());
        $order =$orders->getOrderById($id);
        $product = $orders->getProduct($id);
        
            return $this->view("orderManagement.order",compact('order','product'));
        }
        
    public function accept(int $id){
        $orders = new Orders($this->getDB());
        $orders->acceptOrder($id);
        
        return header('location: /e-commerce-BTS-SIO/E-Commerce/orderManagement/orders/');
        
    }
    public function validate(int $id){
        $orders = new Orders($this->getDB());
        $orders->validateOrder($id);

        return header('location: /e-commerce-BTS-SIO/E-Commerce/orderManagement/orders/');
    }
    public function archive(int $id){
        $orders = new Orders($this->getDB());
        $orders->archive($id);
        
        return header('location: /e-commerce-BTS-SIO/E-Commerce/orderManagement/orders/');
    }
    public function archived(){
        $_archived = new Orders($this->getDB());
        $_archived = $_archived->isArchived();
        

        return $this->view('orderManagement.orderArchived',compact('_archived'));
    }
    }


