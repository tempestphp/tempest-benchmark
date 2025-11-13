<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_240
{
    #[Get('/admin/controller_240')]
    public function index_240(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_240/show/{id}')]
    public function show_240(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_240/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_240/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_240/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_240/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_240/{id}/delete')]
    public function delete($id)
    {

    }
}