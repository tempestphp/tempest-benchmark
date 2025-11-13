<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_627
{
    #[Get('/admin/controller_627')]
    public function index_627(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_627/show/{?id}')]
    public function show_627(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_627/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_627/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_627/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_627/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_627/{id}/delete')]
    public function delete($id)
    {

    }
}