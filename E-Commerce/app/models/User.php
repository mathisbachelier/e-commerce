<?php

namespace App\Models;
use database\DBconnection;
class User extends Model
{
    protected $table ="user";

    public function destroyUser(int $id_user)
    {
        return $this->query("DELETE FROM {$this->table} WHERE id = ?", [$id_user]);
    }

}

