<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_443
{
    #[Get('/admin/controller_443')]
    public function index_443(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_443/show/{id}')]
    public function show_443(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_443/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_443/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_443/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_443/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_443/{id}/delete')]
    public function delete($id)
    {

    }
}