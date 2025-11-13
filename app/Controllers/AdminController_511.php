<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_511
{
    #[Get('/admin/controller_511')]
    public function index_511(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_511/show/{id}')]
    public function show_511(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_511/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_511/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_511/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_511/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_511/{id}/delete')]
    public function delete($id)
    {

    }
}