<?php
namespace App\Models;
use database\DBconnection;

class Product extends Model
{
    protected $table ="products";

    public function getProductsByLastAdd(){
        return $this->query("SELECT * FROM products ORDER BY id DESC LIMIT 10");


    }
    
    public function findByNameAndCategory($name, $category)
    {
        $name = "%{$name}%";
        
        return $this->query("SELECT * FROM {$this->table} WHERE name LIKE ? OR id_category = ?",[$name, $category]);
    }
    public function searchProductByNameAndCategory($search, $category){
        
        return $this->query("SELECT products.*, categories.name as category_name FROM products JOIN categories ON products.category_id = categories.id WHERE name LIKE ? OR categories.id = ?", [$search, $category]);
    }
    }
}

