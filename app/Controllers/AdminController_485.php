<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_485
{
    #[Get('/admin/controller_485')]
    public function index_485(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_485/show/{id}')]
    public function show_485(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_485/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_485/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_485/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_485/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_485/{id}/delete')]
    public function delete($id)
    {

    }
}