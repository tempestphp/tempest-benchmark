<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_301
{
    #[Get('/admin/controller_301')]
    public function index_301(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_301/show/{id}')]
    public function show_301(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_301/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_301/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_301/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_301/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_301/{id}/delete')]
    public function delete($id)
    {

    }
}