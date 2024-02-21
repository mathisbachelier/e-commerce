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
}