<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_162
{
    #[Get('/admin/controller_162')]
    public function index_162(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_162/show/{id}')]
    public function show_162(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_162/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_162/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_162/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_162/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_162/{id}/delete')]
    public function delete($id)
    {

    }
}