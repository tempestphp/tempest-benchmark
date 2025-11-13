<?php

namespace App\Controllers;

use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class PostController_001
{
    #[Get('/posts/controller_001')]
    public function index_001()
    {

    }

    #[Get('/posts/controller_001/{id}')]
    public function show_001($id)
    {

    }

    #[Get('/posts/controller_001/create')]
    public function create($id)
    {

    }

    #[Post('/posts/controller_001/create')]
    public function store($id)
    {

    }

    #[Get('/posts/controller_001/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/posts/controller_001/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/posts/controller_001/{id}/delete')]
    public function delete($id)
    {

    }
}