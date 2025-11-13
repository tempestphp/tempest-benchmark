<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_574
{
    #[Get('/admin/controller_574')]
    public function index_574(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_574/show/{id}')]
    public function show_574(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_574/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_574/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_574/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_574/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_574/{id}/delete')]
    public function delete($id)
    {

    }
}