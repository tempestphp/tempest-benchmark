<?php

namespace App\Controllers;

use Tempest\Http\Get;
use Tempest\Http\Post;

final readonly class UserController_200
{
    #[Get('/users/controller_200')]
    public function index_200()
    {

    }

    #[Get('/users/controller_200/{id}')]
    public function show_200($id)
    {

    }

    #[Get('/users/controller_200/create')]
    public function create($id)
    {

    }

    #[Post('/users/controller_200/create')]
    public function store($id)
    {

    }

    #[Get('/users/controller_200/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/users/controller_200/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/users/controller_200/{id}/delete')]
    public function delete($id)
    {

    }
}