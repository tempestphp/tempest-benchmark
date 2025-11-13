<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_406
{
    #[Get('/admin/controller_406')]
    public function index_406(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_406/show/{id}')]
    public function show_406(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_406/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_406/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_406/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_406/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_406/{id}/delete')]
    public function delete($id)
    {

    }
}