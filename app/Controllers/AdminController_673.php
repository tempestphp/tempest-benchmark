<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_673
{
    #[Get('/admin/controller_673')]
    public function index_673(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_673/show/{?id}')]
    public function show_673(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_673/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_673/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_673/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_673/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_673/{id}/delete')]
    public function delete($id)
    {

    }
}