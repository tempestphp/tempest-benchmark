<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_583
{
    #[Get('/admin/controller_583')]
    public function index_583(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_583/show/{?id}')]
    public function show_583(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_583/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_583/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_583/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_583/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_583/{id}/delete')]
    public function delete($id)
    {

    }
}