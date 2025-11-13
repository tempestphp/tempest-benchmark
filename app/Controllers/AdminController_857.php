<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_857
{
    #[Get('/admin/controller_857')]
    public function index_857()
    {

    }

    #[Get('/admin/controller_857/show/{?id}')]
    public function show_857(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_857/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_857/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_857/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_857/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_857/{id}/delete')]
    public function delete($id)
    {

    }
}