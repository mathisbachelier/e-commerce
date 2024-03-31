<?php
namespace App\Controllers;

use App\Controllers;
use App\Models\ConditionGeneralOfSale;

class ConditionGeneralOfSaleController extends Controller{
    public function index()
    {
        return $this->view('ConditionGeneralOfSale.index');
    }
    
}