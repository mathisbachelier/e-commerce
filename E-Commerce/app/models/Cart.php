<?php

namespace App\Models;
use database\DBconnection;

class Cart extends Model
{

    protected $table ="cart";

    public function getCart()
    {
        return $this->query("SELECT cart.id AS id, name, price, quantity, short_content FROM {$this->table} INNER JOIN product ON cart.id_product = product.id");
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