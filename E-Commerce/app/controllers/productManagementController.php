<?php
namespace App\controllers;
use App\controllers\Controller;
use App\Models\Product;

class productManagementController extends Controller{

    public function index()
    {
        $porduct = new Product($this->getDB());
        $porducts = $porduct->all();

        return $this->view("productManagement.index", compact('porducts'));
    }

    public function edit(int $id)
    {
        $porduct = new Product($this->getDB());
        $porduct =  $porduct->findById($id);

        return $this->view("productManagement.edit", compact('porduct'));
    }

    public function update(int $id)
    {
        $porduct = new Product($this->getDB());
        $result = $porduct->update($id, $_POST);
        if($result){
            return header('location: /E-Commerce-BTS-SIO/E-Commerce/productManagement');
        }
    }

    public function destroy(int $id)
    {
        $post = new Post($this->getDB());
        $result = $post->destroy($id);
        if($result){
            return header('location: /mvc/admin/posts/');
        }
    }
}