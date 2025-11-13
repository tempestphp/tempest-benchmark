<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_647
{
    #[Get('/admin/controller_647')]
    public function index_647()
    {

    }

    #[Get('/admin/controller_647/show/{?id}')]
    public function show_647(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_647/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_647/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_647/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_647/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_647/{id}/delete')]
    public function delete($id)
    {

    }
}