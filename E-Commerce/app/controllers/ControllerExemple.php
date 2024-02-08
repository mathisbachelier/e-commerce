<?php

namespace App\controllers\Admin;
use App\Models\Tag;
use App\models\Post;
use App\controllers\Controller;



class ControllerExemple extends Controller{

    public function index()
    {

        $this->isAdmin();
        $post = new Post($this->getDB());
        $posts = $post->all();

        return $this->view("admin.post.index", compact('posts'));

    }

    public function create()
    {
        $this->isAdmin();
        $tag = new Tag($this->getDB());
        $tags = $tag->all();
        return $this->view("admin.post.form",compact('tags'));

    }

    public function createPost()
    {
        $this->isAdmin();
        $post = new Post($this->getDB());
        $tags = array_pop($_POST);
        $result = $post->create( $_POST,$tags);
        if($result){
            return header('location: /mvc/admin/posts/');
        }
    }

    public function edit(int $id)
    {
        $this->isAdmin();
        $post = new Post($this->getDB());
        $post =  $post->findById($id);
        $tag = new Tag($this->getDB());
        $tags = $tag->all();

        return $this->view("admin.post.form", compact('post', 'tags'));
    }


    public function update(int $id)
    {
        $this->isAdmin();
        $post = new Post($this->getDB());
        $tags = array_pop($_POST);
        $result = $post->update($id, $_POST,$tags);
        if($result){
            return header('location: /mvc/admin/posts/');
        }
        
    }
    public function destroy(int $id)
    {
        $this->isAdmin();
        $post = new Post($this->getDB());
        $result = $post->destroy($id);
        if($result){
            return header('location: /mvc/admin/posts/');
        }
    }
    
}