<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_903
{
    #[Get('/admin/controller_903')]
    public function index_903()
    {

    }

    #[Get('/admin/controller_903/show/{?id}')]
    public function show_903(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_903/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_903/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_903/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_903/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_903/{id}/delete')]
    public function delete($id)
    {

    }
}