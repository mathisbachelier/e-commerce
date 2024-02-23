<?php
namespace App\controllers;
use App\controllers\Controller;
use App\Models\Product;

class productManagementController extends Controller{

    public function index()
    {
        $product = new Product($this->getDB());
        $products = $product->all();

        return $this->view("productManagement.index", compact('products'));
    }

    public function research()
    {
        $product = new Product($this->getDB());
        $products = $product->findByNameAndCategory($_POST['name'], $_POST['category_id']);

        return $this->view("productManagement.index", compact('products'));
    }

    public function edit(int $id)
    {
        $product = new Product($this->getDB());
        $product =  $product->findById($id);

        return $this->view("productManagement.edit", compact('product'));
    }

    public function update(int $id)
    {
        $product = new Product($this->getDB());
        $result = $product->update($id, $_POST);
        if($result){
            return header('location: /E-Commerce-BTS-SIO/E-Commerce/productManagement');
        }
    }

    public function destroy(int $id)
    {
        $product = new Product($this->getDB());
        $result = $product->destroy($id);
        if($result){
            return header('location: /E-Commerce-BTS-SIO/E-Commerce/productManagement');
        }
    }

    public function create()
    {
        return $this->view("productManagement.create");
    }

    public function createProduct()
    {
        $product = new Product($this->getDB());
        $result = $product->create($_POST);
        if($result){
            return header('location: /E-Commerce-BTS-SIO/E-Commerce/productManagement');
        }
    }
}