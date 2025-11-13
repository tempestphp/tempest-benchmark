<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_021
{
    #[Get('/admin/controller_021')]
    public function index_021(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_021/show/{id}')]
    public function show_021(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_021/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_021/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_021/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_021/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_021/{id}/delete')]
    public function delete($id)
    {

    }
}