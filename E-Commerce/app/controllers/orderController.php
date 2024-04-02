<?php
namespace App\Controllers;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;


class orderController extends Controller
{
    public function index(int $id)
    {
        $model = new Order($this->getDB());
        $orders = $model->findById($id);

        $produc = new Product($this->getDB());
        $product = $produc->findById($id);

        $user = new User($this->getDB());
        $user = $user->findById($id);

        return $this->view('order.index', compact('orders', 'product', 'user'));
    }
}
