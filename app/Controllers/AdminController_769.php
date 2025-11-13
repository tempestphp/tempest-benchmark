<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_769
{
    #[Get('/admin/controller_769')]
    public function index_769()
    {

    }

    #[Get('/admin/controller_769/show/{?id}')]
    public function show_769(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_769/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_769/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_769/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_769/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_769/{id}/delete')]
    public function delete($id)
    {

    }
}