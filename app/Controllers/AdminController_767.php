<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_767
{
    #[Get('/admin/controller_767')]
    public function index_767()
    {

    }

    #[Get('/admin/controller_767/show/{?id}')]
    public function show_767(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_767/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_767/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_767/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_767/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_767/{id}/delete')]
    public function delete($id)
    {

    }
}