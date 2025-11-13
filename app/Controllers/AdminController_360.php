<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_360
{
    #[Get('/admin/controller_360')]
    public function index_360(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_360/show/{id}')]
    public function show_360(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_360/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_360/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_360/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_360/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_360/{id}/delete')]
    public function delete($id)
    {

    }
}