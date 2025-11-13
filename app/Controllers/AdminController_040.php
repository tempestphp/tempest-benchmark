<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_040
{
    #[Get('/admin/controller_040')]
    public function index_040(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_040/show/{?id}')]
    public function show_040(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_040/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_040/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_040/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_040/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_040/{id}/delete')]
    public function delete($id)
    {

    }
}