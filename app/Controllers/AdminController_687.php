<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_687
{
    #[Get('/admin/controller_687')]
    public function index_687(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_687/show/{id}')]
    public function show_687(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_687/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_687/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_687/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_687/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_687/{id}/delete')]
    public function delete($id)
    {

    }
}