<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_159
{
    #[Get('/admin/controller_159')]
    public function index_159(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_159/show/{?id}')]
    public function show_159(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_159/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_159/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_159/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_159/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_159/{id}/delete')]
    public function delete($id)
    {

    }
}