<?php

namespace App\Controllers;

use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class UserController_001
{
    #[Get('/users/controller_001')]
    public function index_001()
    {

    }

    #[Get('/users/controller_001/{id}')]
    public function show_001($id)
    {

    }

    #[Get('/users/controller_001/create')]
    public function create($id)
    {

    }

    #[Post('/users/controller_001/create')]
    public function store($id)
    {

    }

    #[Get('/users/controller_001/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/users/controller_001/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/users/controller_001/{id}/delete')]
    public function delete($id)
    {

    }
}