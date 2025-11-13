<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_816
{
    #[Get('/admin/controller_816')]
    public function index_816()
    {

    }

    #[Get('/admin/controller_816/show/{?id}')]
    public function show_816(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_816/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_816/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_816/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_816/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_816/{id}/delete')]
    public function delete($id)
    {

    }
}