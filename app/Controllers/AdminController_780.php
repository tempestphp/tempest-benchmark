<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_780
{
    #[Get('/admin/controller_780')]
    public function index_780()
    {

    }

    #[Get('/admin/controller_780/show/{?id}')]
    public function show_780(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_780/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_780/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_780/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_780/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_780/{id}/delete')]
    public function delete($id)
    {

    }
}