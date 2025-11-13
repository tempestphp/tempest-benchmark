<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_981
{
    #[Get('/admin/controller_981')]
    public function index_981()
    {

    }

    #[Get('/admin/controller_981/show/{?id}')]
    public function show_981(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_981/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_981/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_981/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_981/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_981/{id}/delete')]
    public function delete($id)
    {

    }
}