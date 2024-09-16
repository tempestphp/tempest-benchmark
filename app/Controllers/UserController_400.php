<?php

namespace App\Controllers;

use Tempest\Http\Get;
use Tempest\Http\Post;

final readonly class UserController_400
{
    #[Get('/users/controller_400')]
    public function index_400()
    {

    }

    #[Get('/users/controller_400/{id}')]
    public function show_400($id)
    {

    }

    #[Get('/users/controller_400/create')]
    public function create($id)
    {

    }

    #[Post('/users/controller_400/create')]
    public function store($id)
    {

    }

    #[Get('/users/controller_400/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/users/controller_400/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/users/controller_400/{id}/delete')]
    public function delete($id)
    {

    }
}