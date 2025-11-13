<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_083
{
    #[Get('/admin/controller_083')]
    public function index_083()
    {

    }

    #[Get('/admin/controller_083/show/{?id}')]
    public function show_083(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_083/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_083/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_083/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_083/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_083/{id}/delete')]
    public function delete($id)
    {

    }
}