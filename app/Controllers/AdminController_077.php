<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_077
{
    #[Get('/admin/controller_077')]
    public function index_077(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_077/show/{id}')]
    public function show_077(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_077/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_077/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_077/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_077/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_077/{id}/delete')]
    public function delete($id)
    {

    }
}