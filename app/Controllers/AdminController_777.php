<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_777
{
    #[Get('/admin/controller_777')]
    public function index_777()
    {

    }

    #[Get('/admin/controller_777/show/{?id}')]
    public function show_777(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_777/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_777/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_777/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_777/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_777/{id}/delete')]
    public function delete($id)
    {

    }
}