<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_405
{
    #[Get('/admin/controller_405')]
    public function index_405(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_405/show/{id}')]
    public function show_405(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_405/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_405/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_405/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_405/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_405/{id}/delete')]
    public function delete($id)
    {

    }
}