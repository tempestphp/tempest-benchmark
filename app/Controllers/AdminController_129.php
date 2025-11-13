<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_129
{
    #[Get('/admin/controller_129')]
    public function index_129()
    {

    }

    #[Get('/admin/controller_129/show/{?id}')]
    public function show_129(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_129/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_129/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_129/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_129/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_129/{id}/delete')]
    public function delete($id)
    {

    }
}