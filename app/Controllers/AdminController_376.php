<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_376
{
    #[Get('/admin/controller_376')]
    public function index_376()
    {

    }

    #[Get('/admin/controller_376/show/{?id}')]
    public function show_376(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_376/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_376/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_376/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_376/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_376/{id}/delete')]
    public function delete($id)
    {

    }
}