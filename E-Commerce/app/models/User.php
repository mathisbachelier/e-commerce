<?php

namespace App\Models;
use database\DBconnection;
class User extends Model
{
    protected $table ="user";

    public function getById(int $id)
    {
        return $this->query("SELECT * from {$this->table} where id = ?",[$id],true);
    }

    public function destroyUser(int $id)
    {
        return $this->query("DELETE FROM {$this->table} WHERE id = ?", [$id]);
    }

    public function changeRole(int $id,int $role)
    {
        $stmt =  $this->db->getPDO()->prepare("UPDATE {$this->table} SET role = ? WHERE id = ?");
        $stmt->execute([$role, $id]);
    }

    public function searchUser($search)
    {
        $search = "%{$search}%";
        return $this->query("SELECT * FROM {$this->table} WHERE email like ?",[$search]);
    }
}

