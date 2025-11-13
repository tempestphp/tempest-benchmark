<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_462
{
    #[Get('/admin/controller_462')]
    public function index_462(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_462/show/{?id}')]
    public function show_462(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_462/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_462/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_462/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_462/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_462/{id}/delete')]
    public function delete($id)
    {

    }
}