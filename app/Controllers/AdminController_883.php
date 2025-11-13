<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_883
{
    #[Get('/admin/controller_883')]
    public function index_883(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_883/show/{?id}')]
    public function show_883(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_883/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_883/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_883/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_883/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_883/{id}/delete')]
    public function delete($id)
    {

    }
}