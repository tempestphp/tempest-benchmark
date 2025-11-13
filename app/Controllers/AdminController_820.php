<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_820
{
    #[Get('/admin/controller_820')]
    public function index_820(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_820/show/{id}')]
    public function show_820(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_820/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_820/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_820/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_820/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_820/{id}/delete')]
    public function delete($id)
    {

    }
}