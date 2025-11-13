<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_161
{
    #[Get('/admin/controller_161')]
    public function index_161(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_161/show/{?id}')]
    public function show_161(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_161/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_161/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_161/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_161/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_161/{id}/delete')]
    public function delete($id)
    {

    }
}