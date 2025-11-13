<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_064
{
    #[Get('/admin/controller_064')]
    public function index_064(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_064/show/{id}')]
    public function show_064(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_064/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_064/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_064/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_064/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_064/{id}/delete')]
    public function delete($id)
    {

    }
}