<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_894
{
    #[Get('/admin/controller_894')]
    public function index_894(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_894/show/{?id}')]
    public function show_894(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_894/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_894/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_894/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_894/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_894/{id}/delete')]
    public function delete($id)
    {

    }
}