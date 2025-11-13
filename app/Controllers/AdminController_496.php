<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_496
{
    #[Get('/admin/controller_496')]
    public function index_496()
    {

    }

    #[Get('/admin/controller_496/show/{?id}')]
    public function show_496(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_496/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_496/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_496/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_496/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_496/{id}/delete')]
    public function delete($id)
    {

    }
}