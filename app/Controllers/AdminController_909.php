<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_909
{
    #[Get('/admin/controller_909')]
    public function index_909()
    {

    }

    #[Get('/admin/controller_909/show/{?id}')]
    public function show_909(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_909/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_909/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_909/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_909/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_909/{id}/delete')]
    public function delete($id)
    {

    }
}