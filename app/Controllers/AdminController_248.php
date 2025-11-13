<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_248
{
    #[Get('/admin/controller_248')]
    public function index_248(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_248/show/{id}')]
    public function show_248(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_248/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_248/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_248/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_248/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_248/{id}/delete')]
    public function delete($id)
    {

    }
}