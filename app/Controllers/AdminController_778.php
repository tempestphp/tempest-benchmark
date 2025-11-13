<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_778
{
    #[Get('/admin/controller_778')]
    public function index_778(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_778/show/{?id}')]
    public function show_778(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_778/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_778/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_778/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_778/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_778/{id}/delete')]
    public function delete($id)
    {

    }
}