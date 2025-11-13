<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_302
{
    #[Get('/admin/controller_302')]
    public function index_302(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_302/show/{id}')]
    public function show_302(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_302/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_302/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_302/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_302/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_302/{id}/delete')]
    public function delete($id)
    {

    }
}