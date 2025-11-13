<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_499
{
    #[Get('/admin/controller_499')]
    public function index_499()
    {

    }

    #[Get('/admin/controller_499/show/{?id}')]
    public function show_499(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_499/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_499/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_499/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_499/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_499/{id}/delete')]
    public function delete($id)
    {

    }
}