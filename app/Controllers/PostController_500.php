<?php

namespace App\Controllers;

use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class PostController_500
{
    #[Get('/posts/controller_500')]
    public function index_500()
    {

    }

    #[Get('/posts/controller_500/{id}')]
    public function show_500($id)
    {

    }

    #[Get('/posts/controller_500/create')]
    public function create($id)
    {

    }

    #[Post('/posts/controller_500/create')]
    public function store($id)
    {

    }

    #[Get('/posts/controller_500/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/posts/controller_500/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/posts/controller_500/{id}/delete')]
    public function delete($id)
    {

    }
}