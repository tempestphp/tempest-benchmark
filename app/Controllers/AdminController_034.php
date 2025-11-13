<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_034
{
    #[Get('/admin/controller_034')]
    public function index_034(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_034/show/{?id}')]
    public function show_034(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_034/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_034/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_034/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_034/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_034/{id}/delete')]
    public function delete($id)
    {

    }
}