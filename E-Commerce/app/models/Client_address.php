<?php

namespace App\Models;
use database\DBconnection;

class Client_address extends Model
{
    protected $table ="client_address";

    public function find_adress(int $id)
    {
        return $this->query("SELECT * FROM {$this->table} INNER JOIN client_address AS A ON A.address_id = {$this->table}.id INNER JOIN client AS B ON A.key = B.key WHERE id = ?", [$id]);
    }
}