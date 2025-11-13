<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_056
{
    #[Get('/admin/controller_056')]
    public function index_056()
    {

    }

    #[Get('/admin/controller_056/show/{?id}')]
    public function show_056(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_056/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_056/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_056/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_056/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_056/{id}/delete')]
    public function delete($id)
    {

    }
}