<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_548
{
    #[Get('/admin/controller_548')]
    public function index_548()
    {

    }

    #[Get('/admin/controller_548/show/{?id}')]
    public function show_548(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_548/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_548/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_548/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_548/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_548/{id}/delete')]
    public function delete($id)
    {

    }
}