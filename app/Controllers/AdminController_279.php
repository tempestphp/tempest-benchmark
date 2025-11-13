<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_279
{
    #[Get('/admin/controller_279')]
    public function index_279()
    {

    }

    #[Get('/admin/controller_279/show/{?id}')]
    public function show_279(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_279/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_279/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_279/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_279/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_279/{id}/delete')]
    public function delete($id)
    {

    }
}