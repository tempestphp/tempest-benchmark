<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_266
{
    #[Get('/admin/controller_266')]
    public function index_266(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_266/show/{?id}')]
    public function show_266(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_266/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_266/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_266/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_266/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_266/{id}/delete')]
    public function delete($id)
    {

    }
}