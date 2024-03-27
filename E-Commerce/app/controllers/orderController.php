<?php
namespace App\Controllers;


class HomepageController extends Controller
{
    public function index()
    {
        return $this->view('order.index');
    }
}
