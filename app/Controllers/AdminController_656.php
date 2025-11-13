<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_656
{
    #[Get('/admin/controller_656')]
    public function index_656(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_656/show/{?id}')]
    public function show_656(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_656/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_656/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_656/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_656/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_656/{id}/delete')]
    public function delete($id)
    {

    }
}