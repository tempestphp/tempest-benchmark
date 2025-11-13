<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_352
{
    #[Get('/admin/controller_352')]
    public function index_352()
    {

    }

    #[Get('/admin/controller_352/show/{?id}')]
    public function show_352(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_352/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_352/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_352/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_352/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_352/{id}/delete')]
    public function delete($id)
    {

    }
}