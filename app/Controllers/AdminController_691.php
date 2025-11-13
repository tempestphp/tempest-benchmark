<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_691
{
    #[Get('/admin/controller_691')]
    public function index_691(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_691/show/{?id}')]
    public function show_691(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_691/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_691/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_691/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_691/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_691/{id}/delete')]
    public function delete($id)
    {

    }
}