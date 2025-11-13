<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_417
{
    #[Get('/admin/controller_417')]
    public function index_417(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_417/show/{?id}')]
    public function show_417(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_417/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_417/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_417/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_417/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_417/{id}/delete')]
    public function delete($id)
    {

    }
}