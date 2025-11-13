<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_858
{
    #[Get('/admin/controller_858')]
    public function index_858(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_858/show/{id}')]
    public function show_858(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_858/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_858/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_858/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_858/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_858/{id}/delete')]
    public function delete($id)
    {

    }
}