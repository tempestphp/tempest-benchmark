<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_964
{
    #[Get('/admin/controller_964')]
    public function index_964(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_964/show/{?id}')]
    public function show_964(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_964/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_964/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_964/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_964/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_964/{id}/delete')]
    public function delete($id)
    {

    }
}