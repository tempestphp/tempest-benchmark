<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_229
{
    #[Get('/admin/controller_229')]
    public function index_229()
    {

    }

    #[Get('/admin/controller_229/show/{?id}')]
    public function show_229(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_229/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_229/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_229/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_229/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_229/{id}/delete')]
    public function delete($id)
    {

    }
}