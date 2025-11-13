<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_205
{
    #[Get('/admin/controller_205')]
    public function index_205(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_205/show/{id}')]
    public function show_205(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_205/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_205/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_205/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_205/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_205/{id}/delete')]
    public function delete($id)
    {

    }
}