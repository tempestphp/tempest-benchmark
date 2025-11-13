<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_236
{
    #[Get('/admin/controller_236')]
    public function index_236(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_236/show/{id}')]
    public function show_236(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_236/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_236/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_236/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_236/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_236/{id}/delete')]
    public function delete($id)
    {

    }
}