<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_729
{
    #[Get('/admin/controller_729')]
    public function index_729(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_729/show/{id}')]
    public function show_729(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_729/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_729/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_729/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_729/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_729/{id}/delete')]
    public function delete($id)
    {

    }
}