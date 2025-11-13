<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_157
{
    #[Get('/admin/controller_157')]
    public function index_157(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_157/show/{id}')]
    public function show_157(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_157/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_157/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_157/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_157/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_157/{id}/delete')]
    public function delete($id)
    {

    }
}