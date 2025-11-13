<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_356
{
    #[Get('/admin/controller_356')]
    public function index_356(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_356/show/{id}')]
    public function show_356(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_356/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_356/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_356/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_356/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_356/{id}/delete')]
    public function delete($id)
    {

    }
}