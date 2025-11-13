<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_790
{
    #[Get('/admin/controller_790')]
    public function index_790(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_790/show/{id}')]
    public function show_790(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_790/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_790/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_790/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_790/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_790/{id}/delete')]
    public function delete($id)
    {

    }
}