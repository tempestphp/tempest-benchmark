<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_987
{
    #[Get('/admin/controller_987')]
    public function index_987()
    {

    }

    #[Get('/admin/controller_987/show/{?id}')]
    public function show_987(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_987/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_987/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_987/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_987/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_987/{id}/delete')]
    public function delete($id)
    {

    }
}