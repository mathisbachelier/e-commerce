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
    public function search()
    {
        $model = new Product($this->getDB());
        $search = $model->searchProductByNameAndCategory($_POST['name'], $_POST['categories']);
        
        return $this->view('homepage.index', compact('search'));
    }
}
