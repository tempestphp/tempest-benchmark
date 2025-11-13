<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_063
{
    #[Get('/admin/controller_063')]
    public function index_063(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_063/show/{?id}')]
    public function show_063(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_063/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_063/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_063/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_063/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_063/{id}/delete')]
    public function delete($id)
    {

    }
}