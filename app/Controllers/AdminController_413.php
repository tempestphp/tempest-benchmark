<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_413
{
    #[Get('/admin/controller_413')]
    public function index_413()
    {

    }

    #[Get('/admin/controller_413/show/{?id}')]
    public function show_413(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_413/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_413/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_413/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_413/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_413/{id}/delete')]
    public function delete($id)
    {

    }
}