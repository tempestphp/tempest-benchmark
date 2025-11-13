<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_219
{
    #[Get('/admin/controller_219')]
    public function index_219(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_219/show/{id}')]
    public function show_219(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_219/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_219/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_219/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_219/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_219/{id}/delete')]
    public function delete($id)
    {

    }
}