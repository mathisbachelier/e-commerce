<?php
namespace App\Controllers;
use App\Models\Cart;

class CartController extends Controller{

    public function index(){

        $model = new Cart($this->getDB());
        $products = $model->getCart();

        return $this->view('cart.index', compact('products'));
    }

    public function update($id)
    {

    $model = new Cart($this->getDB());
    $updated = $model->changeQuantity($id,$_POST['value']);

    return header('location: /E-Commerce-BTS-SIO/E-Commerce/cart');
    }


    public function increase($id){
        
        $model = new Cart($this->getDB());
        $increased = $model->increaseQuantity($id);

        return header('location: /E-Commerce-BTS-SIO/E-Commerce/cart');
    }

    public function decrease($id){
        
        $model = new Cart($this->getDB());
        $decreased = $model->decreaseQuantity($id);

        return header('location: /E-Commerce-BTS-SIO/E-Commerce/cart');
    }

    public function destroy($id)
    {
        $model = new Cart($this->getDB());
        $deleted = $model->destroy($id);

        return header('location: /E-Commerce-BTS-SIO/E-Commerce/cart');
    }

}   