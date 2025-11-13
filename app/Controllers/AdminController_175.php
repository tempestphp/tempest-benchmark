<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_175
{
    #[Get('/admin/controller_175')]
    public function index_175(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_175/show/{?id}')]
    public function show_175(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_175/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_175/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_175/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_175/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_175/{id}/delete')]
    public function delete($id)
    {

    }
}