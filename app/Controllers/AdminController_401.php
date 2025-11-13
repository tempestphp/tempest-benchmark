<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_401
{
    #[Get('/admin/controller_401')]
    public function index_401()
    {

    }

    #[Get('/admin/controller_401/show/{?id}')]
    public function show_401(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_401/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_401/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_401/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_401/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_401/{id}/delete')]
    public function delete($id)
    {

    }
}