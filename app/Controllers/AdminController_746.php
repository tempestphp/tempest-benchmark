<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_746
{
    #[Get('/admin/controller_746')]
    public function index_746(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_746/show/{id}')]
    public function show_746(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_746/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_746/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_746/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_746/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_746/{id}/delete')]
    public function delete($id)
    {

    }
}