<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_277
{
    #[Get('/admin/controller_277')]
    public function index_277()
    {

    }

    #[Get('/admin/controller_277/show/{?id}')]
    public function show_277(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_277/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_277/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_277/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_277/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_277/{id}/delete')]
    public function delete($id)
    {

    }
}