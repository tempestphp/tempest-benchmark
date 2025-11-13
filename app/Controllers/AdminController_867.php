<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_867
{
    #[Get('/admin/controller_867')]
    public function index_867(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_867/show/{id}')]
    public function show_867(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_867/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_867/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_867/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_867/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_867/{id}/delete')]
    public function delete($id)
    {

    }
}