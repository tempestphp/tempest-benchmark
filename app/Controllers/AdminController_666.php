<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_666
{
    #[Get('/admin/controller_666')]
    public function index_666(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_666/show/{id}')]
    public function show_666(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_666/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_666/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_666/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_666/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_666/{id}/delete')]
    public function delete($id)
    {

    }
}