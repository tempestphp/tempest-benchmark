<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_948
{
    #[Get('/admin/controller_948')]
    public function index_948(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_948/show/{id}')]
    public function show_948(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_948/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_948/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_948/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_948/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_948/{id}/delete')]
    public function delete($id)
    {

    }
}