<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_493
{
    #[Get('/admin/controller_493')]
    public function index_493(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_493/show/{id}')]
    public function show_493(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_493/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_493/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_493/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_493/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_493/{id}/delete')]
    public function delete($id)
    {

    }
}