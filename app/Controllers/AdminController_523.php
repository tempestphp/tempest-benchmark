<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_523
{
    #[Get('/admin/controller_523')]
    public function index_523(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_523/show/{id}')]
    public function show_523(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_523/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_523/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_523/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_523/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_523/{id}/delete')]
    public function delete($id)
    {

    }
}