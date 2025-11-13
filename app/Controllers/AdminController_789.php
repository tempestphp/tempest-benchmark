<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_789
{
    #[Get('/admin/controller_789')]
    public function index_789()
    {

    }

    #[Get('/admin/controller_789/show/{?id}')]
    public function show_789(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_789/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_789/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_789/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_789/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_789/{id}/delete')]
    public function delete($id)
    {

    }
}