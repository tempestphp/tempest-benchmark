<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_027
{
    #[Get('/admin/controller_027')]
    public function index_027(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_027/show/{id}')]
    public function show_027(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_027/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_027/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_027/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_027/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_027/{id}/delete')]
    public function delete($id)
    {

    }
}