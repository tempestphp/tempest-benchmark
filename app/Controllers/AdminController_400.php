<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_400
{
    #[Get('/admin/controller_400')]
    public function index_400(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_400/show/{id}')]
    public function show_400(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_400/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_400/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_400/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_400/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_400/{id}/delete')]
    public function delete($id)
    {

    }
}