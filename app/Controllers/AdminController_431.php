<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_431
{
    #[Get('/admin/controller_431')]
    public function index_431(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_431/show/{id}')]
    public function show_431(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_431/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_431/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_431/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_431/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_431/{id}/delete')]
    public function delete($id)
    {

    }
}