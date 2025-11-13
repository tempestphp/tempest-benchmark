<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_377
{
    #[Get('/admin/controller_377')]
    public function index_377(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_377/show/{id}')]
    public function show_377(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_377/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_377/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_377/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_377/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_377/{id}/delete')]
    public function delete($id)
    {

    }
}