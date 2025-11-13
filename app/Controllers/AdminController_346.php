<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_346
{
    #[Get('/admin/controller_346')]
    public function index_346(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_346/show/{id}')]
    public function show_346(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_346/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_346/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_346/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_346/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_346/{id}/delete')]
    public function delete($id)
    {

    }
}