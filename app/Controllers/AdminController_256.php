<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_256
{
    #[Get('/admin/controller_256')]
    public function index_256()
    {

    }

    #[Get('/admin/controller_256/show/{?id}')]
    public function show_256(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_256/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_256/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_256/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_256/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_256/{id}/delete')]
    public function delete($id)
    {

    }
}