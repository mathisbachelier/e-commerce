<?php
namespace App\Controllers;

use App\Models\Product;

class ProductController extends Controller{
    
    public function show(int $id){
        $product = new Product($this->getDB());
        $product = $product->findById($id);
        
        return $this->view("homepage.show", compact('product'));
    }


}

class ProductController {
    public function show($params) {
        include_once(VIEWS . 'homepage/show.php');
    }
}

?>