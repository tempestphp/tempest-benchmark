<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_622
{
    #[Get('/admin/controller_622')]
    public function index_622(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_622/show/{id}')]
    public function show_622(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_622/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_622/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_622/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_622/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_622/{id}/delete')]
    public function delete($id)
    {

    }
}