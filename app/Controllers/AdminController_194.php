<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_194
{
    #[Get('/admin/controller_194')]
    public function index_194(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_194/show/{?id}')]
    public function show_194(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_194/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_194/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_194/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_194/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_194/{id}/delete')]
    public function delete($id)
    {

    }
}