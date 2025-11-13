<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_510
{
    #[Get('/admin/controller_510')]
    public function index_510(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_510/show/{id}')]
    public function show_510(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_510/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_510/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_510/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_510/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_510/{id}/delete')]
    public function delete($id)
    {

    }
}