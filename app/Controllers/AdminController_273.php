<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_273
{
    #[Get('/admin/controller_273')]
    public function index_273()
    {

    }

    #[Get('/admin/controller_273/show/{?id}')]
    public function show_273(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_273/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_273/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_273/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_273/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_273/{id}/delete')]
    public function delete($id)
    {

    }
}