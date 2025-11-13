<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_547
{
    #[Get('/admin/controller_547')]
    public function index_547(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_547/show/{id}')]
    public function show_547(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_547/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_547/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_547/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_547/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_547/{id}/delete')]
    public function delete($id)
    {

    }
}