<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_700
{
    #[Get('/admin/controller_700')]
    public function index_700(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_700/show/{id}')]
    public function show_700(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_700/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_700/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_700/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_700/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_700/{id}/delete')]
    public function delete($id)
    {

    }
}