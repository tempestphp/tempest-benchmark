<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_095
{
    #[Get('/admin/controller_095')]
    public function index_095()
    {

    }

    #[Get('/admin/controller_095/show/{?id}')]
    public function show_095(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_095/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_095/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_095/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_095/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_095/{id}/delete')]
    public function delete($id)
    {

    }
}