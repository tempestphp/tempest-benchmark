<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_535
{
    #[Get('/admin/controller_535')]
    public function index_535(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_535/show/{?id}')]
    public function show_535(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_535/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_535/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_535/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_535/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_535/{id}/delete')]
    public function delete($id)
    {

    }
}