<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_502
{
    #[Get('/admin/controller_502')]
    public function index_502()
    {

    }

    #[Get('/admin/controller_502/show/{?id}')]
    public function show_502(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_502/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_502/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_502/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_502/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_502/{id}/delete')]
    public function delete($id)
    {

    }
}