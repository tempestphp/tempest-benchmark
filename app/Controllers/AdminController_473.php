<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_473
{
    #[Get('/admin/controller_473')]
    public function index_473(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_473/show/{?id}')]
    public function show_473(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_473/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_473/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_473/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_473/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_473/{id}/delete')]
    public function delete($id)
    {

    }
}