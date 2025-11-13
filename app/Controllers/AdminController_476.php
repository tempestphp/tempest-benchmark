<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_476
{
    #[Get('/admin/controller_476')]
    public function index_476(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_476/show/{id}')]
    public function show_476(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_476/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_476/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_476/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_476/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_476/{id}/delete')]
    public function delete($id)
    {

    }
}