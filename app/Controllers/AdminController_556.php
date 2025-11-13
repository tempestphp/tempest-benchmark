<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_556
{
    #[Get('/admin/controller_556')]
    public function index_556(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_556/show/{?id}')]
    public function show_556(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_556/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_556/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_556/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_556/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_556/{id}/delete')]
    public function delete($id)
    {

    }
}