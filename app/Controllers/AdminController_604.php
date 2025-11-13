<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_604
{
    #[Get('/admin/controller_604')]
    public function index_604(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_604/show/{id}')]
    public function show_604(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_604/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_604/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_604/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_604/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_604/{id}/delete')]
    public function delete($id)
    {

    }
}