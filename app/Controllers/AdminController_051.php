<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_051
{
    #[Get('/admin/controller_051')]
    public function index_051()
    {

    }

    #[Get('/admin/controller_051/show/{?id}')]
    public function show_051(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_051/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_051/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_051/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_051/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_051/{id}/delete')]
    public function delete($id)
    {

    }
}