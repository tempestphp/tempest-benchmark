<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_432
{
    #[Get('/admin/controller_432')]
    public function index_432()
    {

    }

    #[Get('/admin/controller_432/show/{?id}')]
    public function show_432(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_432/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_432/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_432/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_432/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_432/{id}/delete')]
    public function delete($id)
    {

    }
}