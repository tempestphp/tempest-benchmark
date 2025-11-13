<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_226
{
    #[Get('/admin/controller_226')]
    public function index_226(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_226/show/{?id}')]
    public function show_226(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_226/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_226/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_226/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_226/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_226/{id}/delete')]
    public function delete($id)
    {

    }
}