<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_704
{
    #[Get('/admin/controller_704')]
    public function index_704(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_704/show/{id}')]
    public function show_704(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_704/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_704/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_704/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_704/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_704/{id}/delete')]
    public function delete($id)
    {

    }
}