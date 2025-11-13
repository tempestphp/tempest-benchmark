<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_603
{
    #[Get('/admin/controller_603')]
    public function index_603(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_603/show/{?id}')]
    public function show_603(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_603/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_603/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_603/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_603/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_603/{id}/delete')]
    public function delete($id)
    {

    }
}