<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_224
{
    #[Get('/admin/controller_224')]
    public function index_224(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_224/show/{?id}')]
    public function show_224(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_224/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_224/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_224/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_224/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_224/{id}/delete')]
    public function delete($id)
    {

    }
}