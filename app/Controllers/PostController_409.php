<?php

namespace App\Controllers;

use Tempest\Http\Get;
use Tempest\Http\Post;

final readonly class PostController_409
{
    #[Get('/posts/controller_409')]
    public function index_409()
    {

    }

    #[Get('/posts/controller_409/{id}')]
    public function show_409($id)
    {

    }

    #[Get('/posts/controller_409/create')]
    public function create($id)
    {

    }

    #[Post('/posts/controller_409/create')]
    public function store($id)
    {

    }

    #[Get('/posts/controller_409/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/posts/controller_409/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/posts/controller_409/{id}/delete')]
    public function delete($id)
    {

    }
}