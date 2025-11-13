<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_506
{
    #[Get('/admin/controller_506')]
    public function index_506(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_506/show/{id}')]
    public function show_506(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_506/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_506/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_506/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_506/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_506/{id}/delete')]
    public function delete($id)
    {

    }
}