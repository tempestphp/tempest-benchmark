<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_047
{
    #[Get('/admin/controller_047')]
    public function index_047(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_047/show/{id}')]
    public function show_047(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_047/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_047/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_047/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_047/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_047/{id}/delete')]
    public function delete($id)
    {

    }
}