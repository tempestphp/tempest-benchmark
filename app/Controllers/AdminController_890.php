<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_890
{
    #[Get('/admin/controller_890')]
    public function index_890(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_890/show/{?id}')]
    public function show_890(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_890/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_890/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_890/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_890/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_890/{id}/delete')]
    public function delete($id)
    {

    }
}