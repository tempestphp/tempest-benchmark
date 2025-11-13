<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_484
{
    #[Get('/admin/controller_484')]
    public function index_484(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_484/show/{id}')]
    public function show_484(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_484/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_484/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_484/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_484/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_484/{id}/delete')]
    public function delete($id)
    {

    }
}