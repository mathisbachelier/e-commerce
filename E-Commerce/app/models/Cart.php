<?php

namespace App\Models;
use database\DBconnection;

class Cart extends Model
{

    protected $table ="products";

    public function getCart($ids)
    {
        $products = [];
        if (empty($ids)) {
            return $products;
        }
        foreach ($ids as $id) {            
            $products[] = $this->query("SELECT * FROM {$this->table} WHERE id = ?", [$id]);
        }
        return $products;
    }

    public function changeQuantity(int $id, string $value)
    {
        $value = "%{$value}%";
        return $this->query("UPDATE {$this->table} SET quantity = quantity + ? WHERE id = ?", [$value], [$id]);
    }

    public function increaseQuantity(int $id)
    {
        return $this->query("UPDATE {$this->table} SET quantity = quantity + 1 WHERE id = ?", [$id]);
    }

    public function decreaseQuantity(int $id)
    {
        return $this->query("UPDATE {$this->table} SET quantity = quantity - 1 WHERE id = ?", [$id]);
    }

}