<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_993
{
    #[Get('/admin/controller_993')]
    public function index_993(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_993/show/{id}')]
    public function show_993(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_993/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_993/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_993/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_993/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_993/{id}/delete')]
    public function delete($id)
    {

    }
}