<?php 

namespace App\Models;
use Database\DBConnection;
use DateTime;

class ModelExemple extends Model{

    protected $table = 'ModelExemple';

    public function getCreatedAt() 
    {
       $date = new DateTime($this->created_at);
       return $date->format('d/m/Y H:i');
    }

    public function getExcerpt()
    {
        return substr($this->content, 0,200) . '...';
    }

    public function create(array $data, ?array $relations = null)
    {
        parent::create($data);
        
        $id = $this->db->getPDO()->lastInsertID();
        
        foreach($relations as $tag_id)
        {
            $stmt =  $this->db->getPDO()->prepare("INSERT  post_tag (post_id,tag_id)VALUES (?, ?)");
            $stmt->execute([$id,$tag_id]);
        }
        return true;
    }

    public function update(int $id,array $data,?array $relations = null)
    {
        parent::update($id,$data);
        $stmt =  $this->db->getPDO()->prepare("DELETE FROM post_tag WHERE post_id = ?");
        $result = $stmt->execute([$id]);
        
        foreach($relations as $tag_id)
        {
            $stmt =  $this->db->getPDO()->prepare("INSERT post_tag (post_id,tag_id)VALUES (?, ?)");
            $stmt->execute([$id,$tag_id]);
        }

        if($result)
        {
            return true;
        }
    }

    public function getTags()
    {
        return $this->query("SELECT t.* from tags t
        INNER JOIN post_tag pt ON pt.tag_id = t.id
        where pt.post_id =  ?",
        [$this->id]);
    }
    
}