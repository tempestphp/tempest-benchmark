<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_059
{
    #[Get('/admin/controller_059')]
    public function index_059(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_059/show/{?id}')]
    public function show_059(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_059/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_059/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_059/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_059/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_059/{id}/delete')]
    public function delete($id)
    {

    }
}