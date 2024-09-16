<?php

namespace App\Controllers;

use Tempest\Http\Get;
use Tempest\Http\Post;

final readonly class PostController_404
{
    #[Get('/posts/controller_404')]
    public function index_404()
    {

    }

    #[Get('/posts/controller_404/{id}')]
    public function show_404($id)
    {

    }

    #[Get('/posts/controller_404/create')]
    public function create($id)
    {

    }

    #[Post('/posts/controller_404/create')]
    public function store($id)
    {

    }

    #[Get('/posts/controller_404/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/posts/controller_404/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/posts/controller_404/{id}/delete')]
    public function delete($id)
    {

    }
}