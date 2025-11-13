<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_887
{
    #[Get('/admin/controller_887')]
    public function index_887()
    {

    }

    #[Get('/admin/controller_887/show/{?id}')]
    public function show_887(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_887/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_887/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_887/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_887/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_887/{id}/delete')]
    public function delete($id)
    {

    }
}