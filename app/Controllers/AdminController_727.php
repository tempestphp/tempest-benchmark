<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_727
{
    #[Get('/admin/controller_727')]
    public function index_727(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_727/show/{?id}')]
    public function show_727(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_727/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_727/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_727/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_727/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_727/{id}/delete')]
    public function delete($id)
    {

    }
}