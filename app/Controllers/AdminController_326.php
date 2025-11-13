<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_326
{
    #[Get('/admin/controller_326')]
    public function index_326(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_326/show/{id}')]
    public function show_326(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_326/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_326/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_326/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_326/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_326/{id}/delete')]
    public function delete($id)
    {

    }
}