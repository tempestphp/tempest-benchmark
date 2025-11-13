<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_526
{
    #[Get('/admin/controller_526')]
    public function index_526(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_526/show/{id}')]
    public function show_526(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_526/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_526/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_526/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_526/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_526/{id}/delete')]
    public function delete($id)
    {

    }
}