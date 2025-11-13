<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_216
{
    #[Get('/admin/controller_216')]
    public function index_216(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_216/show/{?id}')]
    public function show_216(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_216/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_216/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_216/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_216/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_216/{id}/delete')]
    public function delete($id)
    {

    }
}