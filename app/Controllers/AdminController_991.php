<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_991
{
    #[Get('/admin/controller_991')]
    public function index_991(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_991/show/{id}')]
    public function show_991(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_991/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_991/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_991/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_991/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_991/{id}/delete')]
    public function delete($id)
    {

    }
}