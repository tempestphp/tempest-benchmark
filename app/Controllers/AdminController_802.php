<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_802
{
    #[Get('/admin/controller_802')]
    public function index_802(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_802/show/{?id}')]
    public function show_802(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_802/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_802/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_802/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_802/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_802/{id}/delete')]
    public function delete($id)
    {

    }
}