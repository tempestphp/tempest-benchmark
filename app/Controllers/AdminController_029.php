<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_029
{
    #[Get('/admin/controller_029')]
    public function index_029()
    {

    }

    #[Get('/admin/controller_029/show/{?id}')]
    public function show_029(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_029/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_029/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_029/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_029/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_029/{id}/delete')]
    public function delete($id)
    {

    }
}