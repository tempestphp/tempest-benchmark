<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_425
{
    #[Get('/admin/controller_425')]
    public function index_425(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_425/show/{id}')]
    public function show_425(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_425/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_425/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_425/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_425/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_425/{id}/delete')]
    public function delete($id)
    {

    }
}