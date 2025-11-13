<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_428
{
    #[Get('/admin/controller_428')]
    public function index_428(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_428/show/{?id}')]
    public function show_428(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_428/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_428/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_428/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_428/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_428/{id}/delete')]
    public function delete($id)
    {

    }
}