<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_537
{
    #[Get('/admin/controller_537')]
    public function index_537(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_537/show/{?id}')]
    public function show_537(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_537/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_537/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_537/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_537/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_537/{id}/delete')]
    public function delete($id)
    {

    }
}