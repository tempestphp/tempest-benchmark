<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_619
{
    #[Get('/admin/controller_619')]
    public function index_619()
    {

    }

    #[Get('/admin/controller_619/show/{?id}')]
    public function show_619(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_619/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_619/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_619/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_619/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_619/{id}/delete')]
    public function delete($id)
    {

    }
}