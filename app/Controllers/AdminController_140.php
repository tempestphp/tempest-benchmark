<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_140
{
    #[Get('/admin/controller_140')]
    public function index_140(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_140/show/{id}')]
    public function show_140(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_140/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_140/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_140/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_140/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_140/{id}/delete')]
    public function delete($id)
    {

    }
}