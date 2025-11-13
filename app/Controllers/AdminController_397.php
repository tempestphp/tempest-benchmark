<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_397
{
    #[Get('/admin/controller_397')]
    public function index_397(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_397/show/{id}')]
    public function show_397(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_397/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_397/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_397/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_397/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_397/{id}/delete')]
    public function delete($id)
    {

    }
}