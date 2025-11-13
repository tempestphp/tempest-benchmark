<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_292
{
    #[Get('/admin/controller_292')]
    public function index_292()
    {

    }

    #[Get('/admin/controller_292/show/{?id}')]
    public function show_292(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_292/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_292/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_292/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_292/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_292/{id}/delete')]
    public function delete($id)
    {

    }
}