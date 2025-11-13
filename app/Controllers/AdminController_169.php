<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_169
{
    #[Get('/admin/controller_169')]
    public function index_169(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_169/show/{?id}')]
    public function show_169(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_169/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_169/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_169/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_169/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_169/{id}/delete')]
    public function delete($id)
    {

    }
}