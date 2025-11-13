<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_068
{
    #[Get('/admin/controller_068')]
    public function index_068()
    {

    }

    #[Get('/admin/controller_068/show/{?id}')]
    public function show_068(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_068/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_068/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_068/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_068/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_068/{id}/delete')]
    public function delete($id)
    {

    }
}