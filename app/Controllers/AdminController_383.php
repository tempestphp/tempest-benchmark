<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_383
{
    #[Get('/admin/controller_383')]
    public function index_383(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_383/show/{id}')]
    public function show_383(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_383/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_383/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_383/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_383/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_383/{id}/delete')]
    public function delete($id)
    {

    }
}