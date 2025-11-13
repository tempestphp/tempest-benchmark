<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_261
{
    #[Get('/admin/controller_261')]
    public function index_261()
    {

    }

    #[Get('/admin/controller_261/show/{?id}')]
    public function show_261(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_261/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_261/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_261/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_261/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_261/{id}/delete')]
    public function delete($id)
    {

    }
}