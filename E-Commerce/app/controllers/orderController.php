<?php
namespace App\Controllers;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Models\Address;


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

        $address = new Address($this->getDB());
        $address = $address->find_adress($id);

        return $this->view('order.index', compact('orders', 'product', 'user', 'address'));
    }
}
