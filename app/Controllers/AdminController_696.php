<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_696
{
    #[Get('/admin/controller_696')]
    public function index_696(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_696/show/{?id}')]
    public function show_696(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_696/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_696/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_696/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_696/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_696/{id}/delete')]
    public function delete($id)
    {

    }
}