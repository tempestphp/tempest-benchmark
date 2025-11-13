<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_285
{
    #[Get('/admin/controller_285')]
    public function index_285()
    {

    }

    #[Get('/admin/controller_285/show/{?id}')]
    public function show_285(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_285/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_285/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_285/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_285/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_285/{id}/delete')]
    public function delete($id)
    {

    }
}