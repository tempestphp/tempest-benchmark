<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_885
{
    #[Get('/admin/controller_885')]
    public function index_885()
    {

    }

    #[Get('/admin/controller_885/show/{?id}')]
    public function show_885(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_885/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_885/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_885/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_885/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_885/{id}/delete')]
    public function delete($id)
    {

    }
}