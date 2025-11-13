<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_260
{
    #[Get('/admin/controller_260')]
    public function index_260(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_260/show/{?id}')]
    public function show_260(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_260/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_260/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_260/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_260/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_260/{id}/delete')]
    public function delete($id)
    {

    }
}