<?php
namespace App\Controllers;

use App\Models\Product;


class HomepageController extends Controller
{
    public function index()
    {
        $model = new Product($this->getDB());
        $homepage = $model->getProductsByLastAdd();
        
        return $this->view('homepage.index', compact('homepage'));
    }
}
