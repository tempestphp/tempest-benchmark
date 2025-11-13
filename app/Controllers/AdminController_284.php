<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_284
{
    #[Get('/admin/controller_284')]
    public function index_284(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_284/show/{?id}')]
    public function show_284(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_284/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_284/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_284/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_284/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_284/{id}/delete')]
    public function delete($id)
    {

    }
}