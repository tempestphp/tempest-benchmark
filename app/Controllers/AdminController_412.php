<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_412
{
    #[Get('/admin/controller_412')]
    public function index_412(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_412/show/{?id}')]
    public function show_412(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_412/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_412/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_412/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_412/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_412/{id}/delete')]
    public function delete($id)
    {

    }
}