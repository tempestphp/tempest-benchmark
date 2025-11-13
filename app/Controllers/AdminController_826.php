<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_826
{
    #[Get('/admin/controller_826')]
    public function index_826(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_826/show/{?id}')]
    public function show_826(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_826/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_826/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_826/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_826/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_826/{id}/delete')]
    public function delete($id)
    {

    }
}