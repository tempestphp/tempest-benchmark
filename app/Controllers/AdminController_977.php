<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_977
{
    #[Get('/admin/controller_977')]
    public function index_977(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_977/show/{id}')]
    public function show_977(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_977/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_977/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_977/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_977/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_977/{id}/delete')]
    public function delete($id)
    {

    }
}