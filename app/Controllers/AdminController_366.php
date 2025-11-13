<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_366
{
    #[Get('/admin/controller_366')]
    public function index_366(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_366/show/{id}')]
    public function show_366(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_366/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_366/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_366/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_366/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_366/{id}/delete')]
    public function delete($id)
    {

    }
}