<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_929
{
    #[Get('/admin/controller_929')]
    public function index_929()
    {

    }

    #[Get('/admin/controller_929/show/{?id}')]
    public function show_929(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_929/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_929/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_929/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_929/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_929/{id}/delete')]
    public function delete($id)
    {

    }
}