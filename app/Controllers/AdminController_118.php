<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_118
{
    #[Get('/admin/controller_118')]
    public function index_118(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_118/show/{id}')]
    public function show_118(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_118/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_118/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_118/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_118/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_118/{id}/delete')]
    public function delete($id)
    {

    }
}