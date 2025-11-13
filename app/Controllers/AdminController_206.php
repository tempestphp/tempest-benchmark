<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_206
{
    #[Get('/admin/controller_206')]
    public function index_206()
    {

    }

    #[Get('/admin/controller_206/show/{?id}')]
    public function show_206(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_206/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_206/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_206/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_206/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_206/{id}/delete')]
    public function delete($id)
    {

    }
}