<?php

namespace App\Models;

class Product extends Model
{
    protected $table ="products";

    public function getProductsByLastAdd(){
        return $this->query("SELECT * FROM products ORDER BY id DESC LIMIT 10");


    }
    public function getProductsBySearch(string $search){
        return $this->query("SELECT products.*, category.name FROM products JOIN category ON products.id_category = category.id WHERE products.name LIKE ? OR category.name LIKE ?",["%$search%","%$search%"]);
    }
    
}

