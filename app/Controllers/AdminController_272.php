<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_272
{
    #[Get('/admin/controller_272')]
    public function index_272(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_272/show/{id}')]
    public function show_272(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_272/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_272/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_272/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_272/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_272/{id}/delete')]
    public function delete($id)
    {

    }
}