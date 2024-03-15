<?php

namespace App\Models;

class Product extends Model
{
    protected $table ="products";

    public function getProductsByLastAdd(){
        return $this->query("SELECT * FROM products ORDER BY id DESC LIMIT 10");


    }
    
}

