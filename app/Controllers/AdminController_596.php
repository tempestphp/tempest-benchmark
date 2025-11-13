<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_596
{
    #[Get('/admin/controller_596')]
    public function index_596(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_596/show/{?id}')]
    public function show_596(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_596/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_596/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_596/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_596/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_596/{id}/delete')]
    public function delete($id)
    {

    }
}