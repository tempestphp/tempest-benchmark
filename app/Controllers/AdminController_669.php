<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_669
{
    #[Get('/admin/controller_669')]
    public function index_669(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_669/show/{?id}')]
    public function show_669(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_669/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_669/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_669/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_669/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_669/{id}/delete')]
    public function delete($id)
    {

    }
}