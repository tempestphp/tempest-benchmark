<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_190
{
    #[Get('/admin/controller_190')]
    public function index_190(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_190/show/{id}')]
    public function show_190(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_190/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_190/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_190/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_190/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_190/{id}/delete')]
    public function delete($id)
    {

    }
}