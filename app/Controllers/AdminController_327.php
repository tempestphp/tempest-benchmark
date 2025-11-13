<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_327
{
    #[Get('/admin/controller_327')]
    public function index_327(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_327/show/{?id}')]
    public function show_327(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_327/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_327/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_327/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_327/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_327/{id}/delete')]
    public function delete($id)
    {

    }
}