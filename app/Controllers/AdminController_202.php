<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_202
{
    #[Get('/admin/controller_202')]
    public function index_202(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_202/show/{?id}')]
    public function show_202(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_202/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_202/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_202/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_202/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_202/{id}/delete')]
    public function delete($id)
    {

    }
}