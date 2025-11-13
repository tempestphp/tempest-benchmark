<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_888
{
    #[Get('/admin/controller_888')]
    public function index_888()
    {

    }

    #[Get('/admin/controller_888/show/{?id}')]
    public function show_888(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_888/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_888/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_888/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_888/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_888/{id}/delete')]
    public function delete($id)
    {

    }
}