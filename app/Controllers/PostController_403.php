<?php

namespace App\Controllers;

use Tempest\Http\Get;
use Tempest\Http\Post;

final readonly class PostController_403
{
    #[Get('/posts/controller_403')]
    public function index_403()
    {

    }

    #[Get('/posts/controller_403/{id}')]
    public function show_403($id)
    {

    }

    #[Get('/posts/controller_403/create')]
    public function create($id)
    {

    }

    #[Post('/posts/controller_403/create')]
    public function store($id)
    {

    }

    #[Get('/posts/controller_403/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/posts/controller_403/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/posts/controller_403/{id}/delete')]
    public function delete($id)
    {

    }
}