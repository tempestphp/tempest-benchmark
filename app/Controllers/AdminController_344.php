<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_344
{
    #[Get('/admin/controller_344')]
    public function index_344(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_344/show/{?id}')]
    public function show_344(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_344/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_344/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_344/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_344/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_344/{id}/delete')]
    public function delete($id)
    {

    }
}