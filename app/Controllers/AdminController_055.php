<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_055
{
    #[Get('/admin/controller_055')]
    public function index_055(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_055/show/{?id}')]
    public function show_055(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_055/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_055/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_055/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_055/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_055/{id}/delete')]
    public function delete($id)
    {

    }
}