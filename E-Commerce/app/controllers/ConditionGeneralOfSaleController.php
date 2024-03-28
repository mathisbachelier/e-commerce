<?php
namespace App\Http\Controllers;

use App\Models\GeneralConditionOfSale;

class GeneralConditionOfSaleController extends Controller
{
    public function index()
    {
        return view('GeneralConditionOfSale.index');
    }
}