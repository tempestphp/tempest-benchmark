<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_832
{
    #[Get('/admin/controller_832')]
    public function index_832(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_832/show/{id}')]
    public function show_832(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_832/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_832/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_832/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_832/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_832/{id}/delete')]
    public function delete($id)
    {

    }
}