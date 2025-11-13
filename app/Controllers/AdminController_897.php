<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_897
{
    #[Get('/admin/controller_897')]
    public function index_897(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_897/show/{?id}')]
    public function show_897(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_897/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_897/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_897/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_897/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_897/{id}/delete')]
    public function delete($id)
    {

    }
}