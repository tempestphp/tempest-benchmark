<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_861
{
    #[Get('/admin/controller_861')]
    public function index_861(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_861/show/{id}')]
    public function show_861(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_861/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_861/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_861/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_861/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_861/{id}/delete')]
    public function delete($id)
    {

    }
}