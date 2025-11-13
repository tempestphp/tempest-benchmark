<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_764
{
    #[Get('/admin/controller_764')]
    public function index_764(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_764/show/{?id}')]
    public function show_764(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_764/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_764/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_764/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_764/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_764/{id}/delete')]
    public function delete($id)
    {

    }
}