<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_898
{
    #[Get('/admin/controller_898')]
    public function index_898(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_898/show/{id}')]
    public function show_898(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_898/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_898/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_898/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_898/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_898/{id}/delete')]
    public function delete($id)
    {

    }
}