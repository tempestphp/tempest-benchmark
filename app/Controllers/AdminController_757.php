<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_757
{
    #[Get('/admin/controller_757')]
    public function index_757()
    {

    }

    #[Get('/admin/controller_757/show/{?id}')]
    public function show_757(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_757/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_757/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_757/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_757/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_757/{id}/delete')]
    public function delete($id)
    {

    }
}