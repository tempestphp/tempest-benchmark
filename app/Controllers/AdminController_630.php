<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_630
{
    #[Get('/admin/controller_630')]
    public function index_630(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_630/show/{?id}')]
    public function show_630(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_630/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_630/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_630/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_630/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_630/{id}/delete')]
    public function delete($id)
    {

    }
}