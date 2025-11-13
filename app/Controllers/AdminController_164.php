<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_164
{
    #[Get('/admin/controller_164')]
    public function index_164(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_164/show/{?id}')]
    public function show_164(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_164/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_164/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_164/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_164/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_164/{id}/delete')]
    public function delete($id)
    {

    }
}