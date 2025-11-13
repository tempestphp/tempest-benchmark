<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_348
{
    #[Get('/admin/controller_348')]
    public function index_348(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_348/show/{id}')]
    public function show_348(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_348/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_348/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_348/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_348/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_348/{id}/delete')]
    public function delete($id)
    {

    }
}