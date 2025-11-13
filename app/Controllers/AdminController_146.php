<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_146
{
    #[Get('/admin/controller_146')]
    public function index_146(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_146/show/{?id}')]
    public function show_146(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_146/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_146/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_146/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_146/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_146/{id}/delete')]
    public function delete($id)
    {

    }
}