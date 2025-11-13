<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_650
{
    #[Get('/admin/controller_650')]
    public function index_650(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_650/show/{id}')]
    public function show_650(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_650/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_650/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_650/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_650/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_650/{id}/delete')]
    public function delete($id)
    {

    }
}