<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_633
{
    #[Get('/admin/controller_633')]
    public function index_633(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_633/show/{id}')]
    public function show_633(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_633/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_633/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_633/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_633/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_633/{id}/delete')]
    public function delete($id)
    {

    }
}