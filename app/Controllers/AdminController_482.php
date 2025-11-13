<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_482
{
    #[Get('/admin/controller_482')]
    public function index_482(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_482/show/{?id}')]
    public function show_482(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_482/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_482/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_482/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_482/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_482/{id}/delete')]
    public function delete($id)
    {

    }
}