<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_331
{
    #[Get('/admin/controller_331')]
    public function index_331(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_331/show/{?id}')]
    public function show_331(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_331/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_331/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_331/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_331/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_331/{id}/delete')]
    public function delete($id)
    {

    }
}