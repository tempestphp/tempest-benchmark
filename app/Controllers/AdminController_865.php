<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_865
{
    #[Get('/admin/controller_865')]
    public function index_865()
    {

    }

    #[Get('/admin/controller_865/show/{?id}')]
    public function show_865(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_865/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_865/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_865/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_865/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_865/{id}/delete')]
    public function delete($id)
    {

    }
}