<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_794
{
    #[Get('/admin/controller_794')]
    public function index_794(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_794/show/{?id}')]
    public function show_794(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_794/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_794/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_794/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_794/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_794/{id}/delete')]
    public function delete($id)
    {

    }
}