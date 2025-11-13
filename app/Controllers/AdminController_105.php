<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_105
{
    #[Get('/admin/controller_105')]
    public function index_105()
    {

    }

    #[Get('/admin/controller_105/show/{?id}')]
    public function show_105(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_105/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_105/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_105/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_105/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_105/{id}/delete')]
    public function delete($id)
    {

    }
}