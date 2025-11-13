<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_112
{
    #[Get('/admin/controller_112')]
    public function index_112(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_112/show/{id}')]
    public function show_112(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_112/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_112/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_112/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_112/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_112/{id}/delete')]
    public function delete($id)
    {

    }
}