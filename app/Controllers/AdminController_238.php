<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_238
{
    #[Get('/admin/controller_238')]
    public function index_238(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_238/show/{id}')]
    public function show_238(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_238/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_238/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_238/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_238/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_238/{id}/delete')]
    public function delete($id)
    {

    }
}