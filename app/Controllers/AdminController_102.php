<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_102
{
    #[Get('/admin/controller_102')]
    public function index_102(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_102/show/{?id}')]
    public function show_102(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_102/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_102/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_102/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_102/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_102/{id}/delete')]
    public function delete($id)
    {

    }
}