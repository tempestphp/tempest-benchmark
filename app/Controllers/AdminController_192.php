<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_192
{
    #[Get('/admin/controller_192')]
    public function index_192(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_192/show/{?id}')]
    public function show_192(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_192/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_192/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_192/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_192/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_192/{id}/delete')]
    public function delete($id)
    {

    }
}