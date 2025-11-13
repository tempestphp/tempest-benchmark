<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_036
{
    #[Get('/admin/controller_036')]
    public function index_036(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_036/show/{id}')]
    public function show_036(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_036/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_036/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_036/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_036/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_036/{id}/delete')]
    public function delete($id)
    {

    }
}