<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_041
{
    #[Get('/admin/controller_041')]
    public function index_041(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_041/show/{id}')]
    public function show_041(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_041/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_041/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_041/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_041/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_041/{id}/delete')]
    public function delete($id)
    {

    }
}