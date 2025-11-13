<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_179
{
    #[Get('/admin/controller_179')]
    public function index_179()
    {

    }

    #[Get('/admin/controller_179/show/{?id}')]
    public function show_179(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_179/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_179/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_179/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_179/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_179/{id}/delete')]
    public function delete($id)
    {

    }
}