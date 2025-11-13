<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_379
{
    #[Get('/admin/controller_379')]
    public function index_379()
    {

    }

    #[Get('/admin/controller_379/show/{?id}')]
    public function show_379(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_379/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_379/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_379/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_379/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_379/{id}/delete')]
    public function delete($id)
    {

    }
}