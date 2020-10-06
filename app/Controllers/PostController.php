<?php 

namespace App\Controllers;
use Core\View;
use App\Models\Post;

class PostController 
{
    public function index()
    {
        // echo "hello from posts index";
        $data['posts'] = Post::connectTable()->select()->get();

        View::load("posts/index", $data);
    }

    public function create()
    {
        echo "hello from posts create";
    }

    public function store()
    {
    
    }

    public function show($id)
    {
        echo "this is post number $id";
    }
}