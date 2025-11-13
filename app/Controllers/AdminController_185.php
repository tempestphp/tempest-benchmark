<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_185
{
    #[Get('/admin/controller_185')]
    public function index_185(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_185/show/{id}')]
    public function show_185(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_185/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_185/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_185/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_185/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_185/{id}/delete')]
    public function delete($id)
    {

    }
}