<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_459
{
    #[Get('/admin/controller_459')]
    public function index_459(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_459/show/{?id}')]
    public function show_459(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_459/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_459/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_459/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_459/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_459/{id}/delete')]
    public function delete($id)
    {

    }
}