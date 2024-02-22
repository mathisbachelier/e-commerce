<?php

namespace App\Models;
use database\DBconnection;
class User extends Model
{
    protected $table ="users";
    
    public function getByEmail(string $email):User
    {
            return $this->query("SELECT * from {$this->table} WHERE email = ?",[$email],true);
    }

    public function destroyUser(int $id_user)
    {
        return $this->query("DELETE FROM {$this->table} WHERE id = ?", [$id_user]);
    }

    public function changeRole(int $id_user,int $role)
    {
        $stmt =  $this->db->getPDO()->prepare("UPDATE {$this->table} SET role = ? WHERE id = ?");
        $stmt->execute([$role, $id_user]);
    }

    public function searchUser($search)
    {
        $search = "%{$search}%";
        return $this->query("SELECT * FROM {$this->table} WHERE email like ?",[$search]);
    }
}

