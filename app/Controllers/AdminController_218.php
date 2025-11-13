<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_218
{
    #[Get('/admin/controller_218')]
    public function index_218()
    {

    }

    #[Get('/admin/controller_218/show/{?id}')]
    public function show_218(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_218/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_218/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_218/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_218/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_218/{id}/delete')]
    public function delete($id)
    {

    }
}