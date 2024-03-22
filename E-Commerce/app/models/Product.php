<?php
namespace App\Models;
use database\DBconnection;

class Product extends Model
{
    protected $table ="products";
    
    public function findByNameAndCategory($name, $category)
    {
        $name = "%{$name}%";
        
        return $this->query("SELECT * FROM {$this->table} WHERE name LIKE ? OR id_category = ?",[$name, $category]);
    }
}

