<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_999
{
    #[Get('/admin/controller_999')]
    public function index_999()
    {

    }

    #[Get('/admin/controller_999/show/{?id}')]
    public function show_999(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_999/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_999/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_999/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_999/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_999/{id}/delete')]
    public function delete($id)
    {

    }
}