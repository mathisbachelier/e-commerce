<?php
namespace App\Controllers;

use App\Controllers;

class ConditionGeneralOfSaleController extends Controller{
    public function index()
    {
        return $this->view('ConditionGeneralOfSale.index');
    }
}