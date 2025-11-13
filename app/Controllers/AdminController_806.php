<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_806
{
    #[Get('/admin/controller_806')]
    public function index_806(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_806/show/{?id}')]
    public function show_806(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_806/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_806/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_806/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_806/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_806/{id}/delete')]
    public function delete($id)
    {

    }
}