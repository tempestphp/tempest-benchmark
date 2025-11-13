<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_788
{
    #[Get('/admin/controller_788')]
    public function index_788()
    {

    }

    #[Get('/admin/controller_788/show/{?id}')]
    public function show_788(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_788/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_788/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_788/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_788/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_788/{id}/delete')]
    public function delete($id)
    {

    }
}