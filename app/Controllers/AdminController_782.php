<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_782
{
    #[Get('/admin/controller_782')]
    public function index_782(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_782/show/{?id}')]
    public function show_782(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_782/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_782/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_782/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_782/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_782/{id}/delete')]
    public function delete($id)
    {

    }
}