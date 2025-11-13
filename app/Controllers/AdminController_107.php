<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_107
{
    #[Get('/admin/controller_107')]
    public function index_107()
    {

    }

    #[Get('/admin/controller_107/show/{?id}')]
    public function show_107(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_107/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_107/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_107/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_107/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_107/{id}/delete')]
    public function delete($id)
    {

    }
}