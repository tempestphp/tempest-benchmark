<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_796
{
    #[Get('/admin/controller_796')]
    public function index_796(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_796/show/{id}')]
    public function show_796(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_796/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_796/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_796/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_796/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_796/{id}/delete')]
    public function delete($id)
    {

    }
}