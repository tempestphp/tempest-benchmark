<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_126
{
    #[Get('/admin/controller_126')]
    public function index_126()
    {

    }

    #[Get('/admin/controller_126/show/{?id}')]
    public function show_126(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_126/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_126/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_126/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_126/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_126/{id}/delete')]
    public function delete($id)
    {

    }
}