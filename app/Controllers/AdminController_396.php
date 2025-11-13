<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_396
{
    #[Get('/admin/controller_396')]
    public function index_396(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_396/show/{?id}')]
    public function show_396(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_396/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_396/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_396/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_396/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_396/{id}/delete')]
    public function delete($id)
    {

    }
}