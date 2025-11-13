<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_617
{
    #[Get('/admin/controller_617')]
    public function index_617(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_617/show/{id}')]
    public function show_617(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_617/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_617/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_617/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_617/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_617/{id}/delete')]
    public function delete($id)
    {

    }
}