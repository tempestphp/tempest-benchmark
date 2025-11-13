<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_465
{
    #[Get('/admin/controller_465')]
    public function index_465(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_465/show/{?id}')]
    public function show_465(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_465/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_465/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_465/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_465/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_465/{id}/delete')]
    public function delete($id)
    {

    }
}