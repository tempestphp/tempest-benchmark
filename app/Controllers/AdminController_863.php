<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_863
{
    #[Get('/admin/controller_863')]
    public function index_863()
    {

    }

    #[Get('/admin/controller_863/show/{?id}')]
    public function show_863(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_863/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_863/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_863/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_863/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_863/{id}/delete')]
    public function delete($id)
    {

    }
}