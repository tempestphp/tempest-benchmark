<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_170
{
    #[Get('/admin/controller_170')]
    public function index_170(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_170/show/{id}')]
    public function show_170(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_170/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_170/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_170/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_170/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_170/{id}/delete')]
    public function delete($id)
    {

    }
}