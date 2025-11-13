<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_600
{
    #[Get('/admin/controller_600')]
    public function index_600()
    {

    }

    #[Get('/admin/controller_600/show/{?id}')]
    public function show_600(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_600/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_600/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_600/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_600/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_600/{id}/delete')]
    public function delete($id)
    {

    }
}