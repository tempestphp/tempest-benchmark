<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_177
{
    #[Get('/admin/controller_177')]
    public function index_177(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_177/show/{id}')]
    public function show_177(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_177/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_177/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_177/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_177/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_177/{id}/delete')]
    public function delete($id)
    {

    }
}