<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_188
{
    #[Get('/admin/controller_188')]
    public function index_188()
    {

    }

    #[Get('/admin/controller_188/show/{?id}')]
    public function show_188(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_188/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_188/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_188/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_188/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_188/{id}/delete')]
    public function delete($id)
    {

    }
}