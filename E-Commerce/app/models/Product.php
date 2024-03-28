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
        if(empty($category) && empty($search)){
            
            return $this->query("SELECT * FROM products ORDER BY id DESC LIMIT 10");
        }else if($category == "toutes"){
            return $this->query("SELECT * FROM products ORDER BY id DESC LIMIT 10");
        }else if(empty($search) && !empty($category)){
            $stmt = "SELECT products.*, categories.name as category_name FROM products JOIN categories ON products.id_category = categories.id WHERE categories.id = ?";
            $result = $this->query($stmt, [$category]);
        }else if(empty($category) && !empty($search)){
            $stmt = "SELECT products.*, categories.name as category_name FROM products JOIN categories ON products.id_category = categories.id WHERE products.name LIKE ? ";
            $result = $this->query($stmt, ["%$search%"]);
        }else{
            $stmt = "SELECT products.*, categories.name as category_name FROM products JOIN categories ON products.id_category = categories.id WHERE products.name LIKE ? AND categories.id = ?";
            $result = $this->query($stmt, ["%$search%", $category]);
        }
        
        
        return $result;
    }
    
    public function getRandomProductsByCategory($category){
        $stmt = "SELECT products.*, categories.name as category_name FROM products JOIN categories ON products.id_category = categories.id WHERE categories.id = ? ORDER BY RAND() LIMIT 4";
        return $this->query($stmt, [$category]);
    }



    
}

