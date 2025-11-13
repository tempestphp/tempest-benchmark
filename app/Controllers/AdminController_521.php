<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_521
{
    #[Get('/admin/controller_521')]
    public function index_521(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_521/show/{id}')]
    public function show_521(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_521/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_521/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_521/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_521/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_521/{id}/delete')]
    public function delete($id)
    {

    }
}