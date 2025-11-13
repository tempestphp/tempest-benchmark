<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_402
{
    #[Get('/admin/controller_402')]
    public function index_402(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_402/show/{id}')]
    public function show_402(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_402/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_402/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_402/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_402/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_402/{id}/delete')]
    public function delete($id)
    {

    }
}