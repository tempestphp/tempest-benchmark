<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_685
{
    #[Get('/admin/controller_685')]
    public function index_685(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_685/show/{id}')]
    public function show_685(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_685/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_685/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_685/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_685/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_685/{id}/delete')]
    public function delete($id)
    {

    }
}