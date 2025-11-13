<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_163
{
    #[Get('/admin/controller_163')]
    public function index_163(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_163/show/{?id}')]
    public function show_163(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_163/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_163/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_163/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_163/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_163/{id}/delete')]
    public function delete($id)
    {

    }
}