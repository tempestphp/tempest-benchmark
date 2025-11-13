<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_222
{
    #[Get('/admin/controller_222')]
    public function index_222(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_222/show/{?id}')]
    public function show_222(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_222/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_222/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_222/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_222/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_222/{id}/delete')]
    public function delete($id)
    {

    }
}