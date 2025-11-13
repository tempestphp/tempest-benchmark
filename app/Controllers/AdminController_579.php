<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_579
{
    #[Get('/admin/controller_579')]
    public function index_579()
    {

    }

    #[Get('/admin/controller_579/show/{?id}')]
    public function show_579(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_579/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_579/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_579/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_579/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_579/{id}/delete')]
    public function delete($id)
    {

    }
}