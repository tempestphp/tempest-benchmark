<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_243
{
    #[Get('/admin/controller_243')]
    public function index_243(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_243/show/{id}')]
    public function show_243(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_243/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_243/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_243/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_243/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_243/{id}/delete')]
    public function delete($id)
    {

    }
}