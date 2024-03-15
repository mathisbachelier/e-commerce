<?php
namespace App\Models;
use database\DBconnection;

class Product extends Model
{
    protected $table ="products";
<<<<<<< HEAD
=======

    public function getProductsByLastAdd(){
        return $this->query("SELECT * FROM products ORDER BY id DESC LIMIT 10");


    }
>>>>>>> origin/mathis-orderManagement
    
    public function findByNameAndCategory($name, $category)
    {
        $name = "%{$name}%";
        
        return $this->query("SELECT * FROM {$this->table} WHERE name LIKE ? OR id_category = ?",[$name, $category]);
    }
}

