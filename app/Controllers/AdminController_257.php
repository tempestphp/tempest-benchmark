<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_257
{
    #[Get('/admin/controller_257')]
    public function index_257()
    {

    }

    #[Get('/admin/controller_257/show/{?id}')]
    public function show_257(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_257/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_257/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_257/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_257/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_257/{id}/delete')]
    public function delete($id)
    {

    }
}