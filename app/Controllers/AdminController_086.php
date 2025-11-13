<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_086
{
    #[Get('/admin/controller_086')]
    public function index_086(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_086/show/{?id}')]
    public function show_086(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_086/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_086/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_086/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_086/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_086/{id}/delete')]
    public function delete($id)
    {

    }
}