<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_274
{
    #[Get('/admin/controller_274')]
    public function index_274(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_274/show/{id}')]
    public function show_274(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_274/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_274/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_274/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_274/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_274/{id}/delete')]
    public function delete($id)
    {

    }
}