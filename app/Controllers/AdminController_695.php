<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_695
{
    #[Get('/admin/controller_695')]
    public function index_695(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_695/show/{id}')]
    public function show_695(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_695/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_695/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_695/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_695/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_695/{id}/delete')]
    public function delete($id)
    {

    }
}