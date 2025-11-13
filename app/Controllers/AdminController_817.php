<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_817
{
    #[Get('/admin/controller_817')]
    public function index_817()
    {

    }

    #[Get('/admin/controller_817/show/{?id}')]
    public function show_817(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_817/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_817/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_817/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_817/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_817/{id}/delete')]
    public function delete($id)
    {

    }
}