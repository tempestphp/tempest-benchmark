<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_324
{
    #[Get('/admin/controller_324')]
    public function index_324(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_324/show/{id}')]
    public function show_324(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_324/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_324/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_324/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_324/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_324/{id}/delete')]
    public function delete($id)
    {

    }
}