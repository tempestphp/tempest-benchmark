<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_959
{
    #[Get('/admin/controller_959')]
    public function index_959(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_959/show/{?id}')]
    public function show_959(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_959/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_959/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_959/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_959/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_959/{id}/delete')]
    public function delete($id)
    {

    }
}