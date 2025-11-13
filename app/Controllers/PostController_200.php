<?php

namespace App\Controllers;

use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class PostController_200
{
    #[Get('/posts/controller_200')]
    public function index_200()
    {

    }

    #[Get('/posts/controller_200/{id}')]
    public function show_200($id)
    {

    }

    #[Get('/posts/controller_200/create')]
    public function create($id)
    {

    }

    #[Post('/posts/controller_200/create')]
    public function store($id)
    {

    }

    #[Get('/posts/controller_200/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/posts/controller_200/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/posts/controller_200/{id}/delete')]
    public function delete($id)
    {

    }
}