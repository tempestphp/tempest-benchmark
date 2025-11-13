<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_370
{
    #[Get('/admin/controller_370')]
    public function index_370()
    {

    }

    #[Get('/admin/controller_370/show/{?id}')]
    public function show_370(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_370/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_370/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_370/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_370/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_370/{id}/delete')]
    public function delete($id)
    {

    }
}