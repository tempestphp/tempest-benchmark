<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_489
{
    #[Get('/admin/controller_489')]
    public function index_489()
    {

    }

    #[Get('/admin/controller_489/show/{?id}')]
    public function show_489(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_489/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_489/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_489/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_489/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_489/{id}/delete')]
    public function delete($id)
    {

    }
}