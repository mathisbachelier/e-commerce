<?php

namespace App\Models;
use database\DBconnection;

class Category extends Model
{

    protected $table ="category";
    public function all():array
    {
        return $this->query("SELECT * FROM {$this->table}");
    }

    public function destroyCategory(int $id)
    {
        return $this->query("DELETE FROM {$this->table} WHERE id = ?", [$id]);
    }

    public function searchCategory($search)
    {
        $search = "%{$search}%";
        return $this->query("SELECT * FROM {$this->table} WHERE name like ?",[$search]);
    }

}