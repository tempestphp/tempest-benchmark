<?php

namespace App\Controllers;

use Tempest\Http\Get;
use Tempest\Http\Post;

final readonly class PostController_400
{
    #[Get('/posts/controller_400')]
    public function index_400()
    {

    }

    #[Get('/posts/controller_400/{id}')]
    public function show_400($id)
    {

    }

    #[Get('/posts/controller_400/create')]
    public function create($id)
    {

    }

    #[Post('/posts/controller_400/create')]
    public function store($id)
    {

    }

    #[Get('/posts/controller_400/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/posts/controller_400/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/posts/controller_400/{id}/delete')]
    public function delete($id)
    {

    }
}