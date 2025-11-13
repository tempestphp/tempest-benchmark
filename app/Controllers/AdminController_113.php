<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_113
{
    #[Get('/admin/controller_113')]
    public function index_113(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_113/show/{id}')]
    public function show_113(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_113/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_113/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_113/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_113/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_113/{id}/delete')]
    public function delete($id)
    {

    }
}