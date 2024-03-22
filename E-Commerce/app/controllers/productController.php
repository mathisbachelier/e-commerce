<?php
namespace App\Controllers;
use App\models\Model;
use App\Models\Product;

class ProductController extends Controller{
    
    public function show(int $id){
        $product = new Product($this->getDB());
        $product = $product->findById($id);
        
        return $this->view("homepage.show", compact('product'));
    }


}

?>