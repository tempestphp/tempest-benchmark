<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_488
{
    #[Get('/admin/controller_488')]
    public function index_488(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_488/show/{?id}')]
    public function show_488(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_488/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_488/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_488/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_488/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_488/{id}/delete')]
    public function delete($id)
    {

    }
}