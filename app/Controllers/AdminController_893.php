<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_893
{
    #[Get('/admin/controller_893')]
    public function index_893(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_893/show/{?id}')]
    public function show_893(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_893/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_893/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_893/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_893/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_893/{id}/delete')]
    public function delete($id)
    {

    }
}