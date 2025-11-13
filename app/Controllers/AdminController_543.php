<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_543
{
    #[Get('/admin/controller_543')]
    public function index_543(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_543/show/{id}')]
    public function show_543(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_543/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_543/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_543/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_543/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_543/{id}/delete')]
    public function delete($id)
    {

    }
}