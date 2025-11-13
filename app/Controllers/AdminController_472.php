<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_472
{
    #[Get('/admin/controller_472')]
    public function index_472()
    {

    }

    #[Get('/admin/controller_472/show/{?id}')]
    public function show_472(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_472/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_472/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_472/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_472/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_472/{id}/delete')]
    public function delete($id)
    {

    }
}