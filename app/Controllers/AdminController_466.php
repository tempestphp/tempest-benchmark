<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_466
{
    #[Get('/admin/controller_466')]
    public function index_466()
    {

    }

    #[Get('/admin/controller_466/show/{?id}')]
    public function show_466(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_466/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_466/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_466/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_466/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_466/{id}/delete')]
    public function delete($id)
    {

    }
}