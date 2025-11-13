<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_183
{
    #[Get('/admin/controller_183')]
    public function index_183()
    {

    }

    #[Get('/admin/controller_183/show/{?id}')]
    public function show_183(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_183/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_183/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_183/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_183/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_183/{id}/delete')]
    public function delete($id)
    {

    }
}