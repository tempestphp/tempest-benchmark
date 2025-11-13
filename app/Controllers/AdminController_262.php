<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_262
{
    #[Get('/admin/controller_262')]
    public function index_262(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_262/show/{?id}')]
    public function show_262(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_262/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_262/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_262/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_262/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_262/{id}/delete')]
    public function delete($id)
    {

    }
}