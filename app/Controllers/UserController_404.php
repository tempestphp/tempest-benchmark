<?php

namespace App\Controllers;

use Tempest\Http\Get;
use Tempest\Http\Post;

final readonly class UserController_404
{
    #[Get('/users/controller_404')]
    public function index_404()
    {

    }

    #[Get('/users/controller_404/{id}')]
    public function show_404($id)
    {

    }

    #[Get('/users/controller_404/create')]
    public function create($id)
    {

    }

    #[Post('/users/controller_404/create')]
    public function store($id)
    {

    }

    #[Get('/users/controller_404/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/users/controller_404/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/users/controller_404/{id}/delete')]
    public function delete($id)
    {

    }
}