<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_814
{
    #[Get('/admin/controller_814')]
    public function index_814(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_814/show/{?id}')]
    public function show_814(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_814/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_814/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_814/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_814/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_814/{id}/delete')]
    public function delete($id)
    {

    }
}