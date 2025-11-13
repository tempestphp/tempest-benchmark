<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_905
{
    #[Get('/admin/controller_905')]
    public function index_905(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_905/show/{id}')]
    public function show_905(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_905/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_905/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_905/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_905/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_905/{id}/delete')]
    public function delete($id)
    {

    }
}