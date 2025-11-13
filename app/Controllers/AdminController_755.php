<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_755
{
    #[Get('/admin/controller_755')]
    public function index_755(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_755/show/{?id}')]
    public function show_755(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_755/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_755/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_755/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_755/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_755/{id}/delete')]
    public function delete($id)
    {

    }
}