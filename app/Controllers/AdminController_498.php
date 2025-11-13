<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_498
{
    #[Get('/admin/controller_498')]
    public function index_498(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_498/show/{id}')]
    public function show_498(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_498/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_498/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_498/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_498/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_498/{id}/delete')]
    public function delete($id)
    {

    }
}