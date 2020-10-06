<?php 

namespace App\Controllers;

class PostController 
{
    public function index()
    {
        echo "hello from posts index";
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