<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_340
{
    #[Get('/admin/controller_340')]
    public function index_340()
    {

    }

    #[Get('/admin/controller_340/show/{?id}')]
    public function show_340(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_340/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_340/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_340/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_340/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_340/{id}/delete')]
    public function delete($id)
    {

    }
}