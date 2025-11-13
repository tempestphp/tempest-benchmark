<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_675
{
    #[Get('/admin/controller_675')]
    public function index_675(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_675/show/{?id}')]
    public function show_675(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_675/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_675/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_675/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_675/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_675/{id}/delete')]
    public function delete($id)
    {

    }
}