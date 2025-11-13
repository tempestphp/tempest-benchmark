<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_198
{
    #[Get('/admin/controller_198')]
    public function index_198()
    {

    }

    #[Get('/admin/controller_198/show/{?id}')]
    public function show_198(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_198/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_198/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_198/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_198/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_198/{id}/delete')]
    public function delete($id)
    {

    }
}