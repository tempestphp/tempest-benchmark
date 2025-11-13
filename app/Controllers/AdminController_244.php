<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_244
{
    #[Get('/admin/controller_244')]
    public function index_244(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_244/show/{id}')]
    public function show_244(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_244/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_244/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_244/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_244/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_244/{id}/delete')]
    public function delete($id)
    {

    }
}