<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_057
{
    #[Get('/admin/controller_057')]
    public function index_057()
    {

    }

    #[Get('/admin/controller_057/show/{?id}')]
    public function show_057(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_057/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_057/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_057/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_057/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_057/{id}/delete')]
    public function delete($id)
    {

    }
}