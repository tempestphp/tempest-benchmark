<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_357
{
    #[Get('/admin/controller_357')]
    public function index_357()
    {

    }

    #[Get('/admin/controller_357/show/{?id}')]
    public function show_357(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_357/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_357/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_357/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_357/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_357/{id}/delete')]
    public function delete($id)
    {

    }
}