<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_436
{
    #[Get('/admin/controller_436')]
    public function index_436()
    {

    }

    #[Get('/admin/controller_436/show/{?id}')]
    public function show_436(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_436/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_436/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_436/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_436/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_436/{id}/delete')]
    public function delete($id)
    {

    }
}