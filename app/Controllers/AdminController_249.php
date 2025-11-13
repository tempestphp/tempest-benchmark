<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_249
{
    #[Get('/admin/controller_249')]
    public function index_249()
    {

    }

    #[Get('/admin/controller_249/show/{?id}')]
    public function show_249(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_249/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_249/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_249/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_249/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_249/{id}/delete')]
    public function delete($id)
    {

    }
}