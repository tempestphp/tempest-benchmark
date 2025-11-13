<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_172
{
    #[Get('/admin/controller_172')]
    public function index_172(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_172/show/{?id}')]
    public function show_172(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_172/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_172/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_172/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_172/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_172/{id}/delete')]
    public function delete($id)
    {

    }
}