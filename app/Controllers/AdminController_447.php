<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_447
{
    #[Get('/admin/controller_447')]
    public function index_447(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_447/show/{?id}')]
    public function show_447(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_447/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_447/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_447/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_447/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_447/{id}/delete')]
    public function delete($id)
    {

    }
}