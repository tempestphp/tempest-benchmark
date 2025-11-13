<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_709
{
    #[Get('/admin/controller_709')]
    public function index_709(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_709/show/{?id}')]
    public function show_709(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_709/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_709/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_709/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_709/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_709/{id}/delete')]
    public function delete($id)
    {

    }
}