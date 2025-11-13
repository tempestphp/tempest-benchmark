<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_109
{
    #[Get('/admin/controller_109')]
    public function index_109(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_109/show/{?id}')]
    public function show_109(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_109/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_109/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_109/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_109/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_109/{id}/delete')]
    public function delete($id)
    {

    }
}