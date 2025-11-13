<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_181
{
    #[Get('/admin/controller_181')]
    public function index_181()
    {

    }

    #[Get('/admin/controller_181/show/{?id}')]
    public function show_181(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_181/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_181/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_181/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_181/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_181/{id}/delete')]
    public function delete($id)
    {

    }
}