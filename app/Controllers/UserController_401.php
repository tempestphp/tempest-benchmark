<?php

namespace App\Controllers;

use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class UserController_401
{
    #[Get('/users/controller_401')]
    public function index_401()
    {

    }

    #[Get('/users/controller_401/{id}')]
    public function show_401($id)
    {

    }

    #[Get('/users/controller_401/create')]
    public function create($id)
    {

    }

    #[Post('/users/controller_401/create')]
    public function store($id)
    {

    }

    #[Get('/users/controller_401/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/users/controller_401/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/users/controller_401/{id}/delete')]
    public function delete($id)
    {

    }
}