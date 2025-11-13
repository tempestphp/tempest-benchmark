<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_060
{
    #[Get('/admin/controller_060')]
    public function index_060(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_060/show/{id}')]
    public function show_060(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_060/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_060/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_060/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_060/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_060/{id}/delete')]
    public function delete($id)
    {

    }
}