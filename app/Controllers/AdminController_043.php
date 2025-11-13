<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_043
{
    #[Get('/admin/controller_043')]
    public function index_043()
    {

    }

    #[Get('/admin/controller_043/show/{?id}')]
    public function show_043(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_043/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_043/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_043/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_043/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_043/{id}/delete')]
    public function delete($id)
    {

    }
}