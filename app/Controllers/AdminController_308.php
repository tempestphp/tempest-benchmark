<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_308
{
    #[Get('/admin/controller_308')]
    public function index_308(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_308/show/{?id}')]
    public function show_308(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_308/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_308/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_308/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_308/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_308/{id}/delete')]
    public function delete($id)
    {

    }
}