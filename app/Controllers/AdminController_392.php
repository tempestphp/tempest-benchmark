<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_392
{
    #[Get('/admin/controller_392')]
    public function index_392(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_392/show/{id}')]
    public function show_392(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_392/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_392/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_392/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_392/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_392/{id}/delete')]
    public function delete($id)
    {

    }
}