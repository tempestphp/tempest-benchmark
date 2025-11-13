<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_338
{
    #[Get('/admin/controller_338')]
    public function index_338(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_338/show/{?id}')]
    public function show_338(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_338/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_338/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_338/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_338/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_338/{id}/delete')]
    public function delete($id)
    {

    }
}