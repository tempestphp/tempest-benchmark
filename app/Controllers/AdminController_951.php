<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_951
{
    #[Get('/admin/controller_951')]
    public function index_951(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_951/show/{?id}')]
    public function show_951(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_951/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_951/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_951/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_951/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_951/{id}/delete')]
    public function delete($id)
    {

    }
}