<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_570
{
    #[Get('/admin/controller_570')]
    public function index_570(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_570/show/{?id}')]
    public function show_570(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_570/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_570/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_570/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_570/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_570/{id}/delete')]
    public function delete($id)
    {

    }
}