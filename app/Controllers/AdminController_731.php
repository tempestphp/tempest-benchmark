<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_731
{
    #[Get('/admin/controller_731')]
    public function index_731(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_731/show/{id}')]
    public function show_731(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_731/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_731/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_731/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_731/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_731/{id}/delete')]
    public function delete($id)
    {

    }
}