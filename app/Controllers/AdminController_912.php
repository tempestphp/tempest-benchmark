<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_912
{
    #[Get('/admin/controller_912')]
    public function index_912(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_912/show/{id}')]
    public function show_912(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_912/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_912/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_912/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_912/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_912/{id}/delete')]
    public function delete($id)
    {

    }
}