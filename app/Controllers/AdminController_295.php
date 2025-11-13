<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_295
{
    #[Get('/admin/controller_295')]
    public function index_295()
    {

    }

    #[Get('/admin/controller_295/show/{?id}')]
    public function show_295(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_295/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_295/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_295/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_295/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_295/{id}/delete')]
    public function delete($id)
    {

    }
}