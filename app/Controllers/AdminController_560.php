<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_560
{
    #[Get('/admin/controller_560')]
    public function index_560()
    {

    }

    #[Get('/admin/controller_560/show/{?id}')]
    public function show_560(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_560/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_560/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_560/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_560/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_560/{id}/delete')]
    public function delete($id)
    {

    }
}