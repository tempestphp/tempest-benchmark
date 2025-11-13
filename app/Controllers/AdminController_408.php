<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_408
{
    #[Get('/admin/controller_408')]
    public function index_408(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_408/show/{?id}')]
    public function show_408(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_408/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_408/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_408/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_408/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_408/{id}/delete')]
    public function delete($id)
    {

    }
}