<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_354
{
    #[Get('/admin/controller_354')]
    public function index_354(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_354/show/{?id}')]
    public function show_354(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_354/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_354/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_354/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_354/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_354/{id}/delete')]
    public function delete($id)
    {

    }
}