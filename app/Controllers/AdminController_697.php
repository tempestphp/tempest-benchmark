<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_697
{
    #[Get('/admin/controller_697')]
    public function index_697()
    {

    }

    #[Get('/admin/controller_697/show/{?id}')]
    public function show_697(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_697/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_697/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_697/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_697/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_697/{id}/delete')]
    public function delete($id)
    {

    }
}