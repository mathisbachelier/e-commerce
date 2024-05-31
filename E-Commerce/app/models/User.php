<?php

namespace App\Models;
use database\DBconnection;
class User extends Model
{
    protected $table ="users";

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

    public function searchUserByEmail($search)
    {
        $search = "%{$search}%";
        return $this->query("SELECT * FROM {$this->table} WHERE email like ?",[$search]);
    }

    public function getRole($id)
    {
        return $this->query("SELECT * FROM {$this->table} WHERE id = ?",[$id]);
    }

    public function updateMdp(int $id, $data)
    {
        if(isset($data['password1']) && !empty($data['password1']) && !empty($data['password2']) && $data['password1'] == $data['password2'])
        {
            $password = password_hash($data['password1'], PASSWORD_BCRYPT);
            $stmt =  $this->db->getPDO()->prepare("UPDATE {$this->table} SET password = ? WHERE id = ?");
            $stmt->execute([$password, $id]);
        }
    }
}

