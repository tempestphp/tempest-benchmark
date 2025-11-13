<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_561
{
    #[Get('/admin/controller_561')]
    public function index_561(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_561/show/{?id}')]
    public function show_561(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_561/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_561/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_561/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_561/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_561/{id}/delete')]
    public function delete($id)
    {

    }
}