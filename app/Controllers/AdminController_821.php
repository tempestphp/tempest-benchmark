<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_821
{
    #[Get('/admin/controller_821')]
    public function index_821()
    {

    }

    #[Get('/admin/controller_821/show/{?id}')]
    public function show_821(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_821/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_821/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_821/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_821/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_821/{id}/delete')]
    public function delete($id)
    {

    }
}