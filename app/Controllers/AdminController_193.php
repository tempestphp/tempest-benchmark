<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_193
{
    #[Get('/admin/controller_193')]
    public function index_193()
    {

    }

    #[Get('/admin/controller_193/show/{?id}')]
    public function show_193(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_193/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_193/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_193/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_193/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_193/{id}/delete')]
    public function delete($id)
    {

    }
}