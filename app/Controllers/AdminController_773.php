<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_773
{
    #[Get('/admin/controller_773')]
    public function index_773()
    {

    }

    #[Get('/admin/controller_773/show/{?id}')]
    public function show_773(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_773/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_773/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_773/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_773/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_773/{id}/delete')]
    public function delete($id)
    {

    }
}