<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_970
{
    #[Get('/admin/controller_970')]
    public function index_970(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_970/show/{id}')]
    public function show_970(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_970/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_970/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_970/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_970/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_970/{id}/delete')]
    public function delete($id)
    {

    }
}