<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_201
{
    #[Get('/admin/controller_201')]
    public function index_201()
    {

    }

    #[Get('/admin/controller_201/show/{?id}')]
    public function show_201(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_201/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_201/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_201/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_201/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_201/{id}/delete')]
    public function delete($id)
    {

    }
}