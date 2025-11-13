<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_720
{
    #[Get('/admin/controller_720')]
    public function index_720(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_720/show/{id}')]
    public function show_720(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_720/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_720/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_720/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_720/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_720/{id}/delete')]
    public function delete($id)
    {

    }
}