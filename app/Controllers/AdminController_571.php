<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_571
{
    #[Get('/admin/controller_571')]
    public function index_571(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_571/show/{?id}')]
    public function show_571(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_571/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_571/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_571/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_571/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_571/{id}/delete')]
    public function delete($id)
    {

    }
}