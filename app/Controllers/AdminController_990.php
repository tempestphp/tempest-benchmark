<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_990
{
    #[Get('/admin/controller_990')]
    public function index_990(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_990/show/{?id}')]
    public function show_990(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_990/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_990/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_990/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_990/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_990/{id}/delete')]
    public function delete($id)
    {

    }
}