<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_067
{
    #[Get('/admin/controller_067')]
    public function index_067(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_067/show/{id}')]
    public function show_067(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_067/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_067/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_067/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_067/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_067/{id}/delete')]
    public function delete($id)
    {

    }
}