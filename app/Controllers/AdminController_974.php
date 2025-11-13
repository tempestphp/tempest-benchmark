<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_974
{
    #[Get('/admin/controller_974')]
    public function index_974(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_974/show/{?id}')]
    public function show_974(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_974/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_974/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_974/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_974/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_974/{id}/delete')]
    public function delete($id)
    {

    }
}