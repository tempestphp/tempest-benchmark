<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_141
{
    #[Get('/admin/controller_141')]
    public function index_141(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_141/show/{?id}')]
    public function show_141(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_141/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_141/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_141/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_141/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_141/{id}/delete')]
    public function delete($id)
    {

    }
}