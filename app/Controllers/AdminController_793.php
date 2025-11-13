<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_793
{
    #[Get('/admin/controller_793')]
    public function index_793(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_793/show/{id}')]
    public function show_793(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_793/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_793/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_793/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_793/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_793/{id}/delete')]
    public function delete($id)
    {

    }
}