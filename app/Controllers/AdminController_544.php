<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_544
{
    #[Get('/admin/controller_544')]
    public function index_544(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_544/show/{?id}')]
    public function show_544(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_544/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_544/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_544/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_544/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_544/{id}/delete')]
    public function delete($id)
    {

    }
}