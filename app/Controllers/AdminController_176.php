<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_176
{
    #[Get('/admin/controller_176')]
    public function index_176(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_176/show/{?id}')]
    public function show_176(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_176/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_176/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_176/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_176/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_176/{id}/delete')]
    public function delete($id)
    {

    }
}