<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_103
{
    #[Get('/admin/controller_103')]
    public function index_103(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_103/show/{?id}')]
    public function show_103(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_103/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_103/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_103/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_103/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_103/{id}/delete')]
    public function delete($id)
    {

    }
}