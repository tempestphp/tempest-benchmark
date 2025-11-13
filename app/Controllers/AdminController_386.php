<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_386
{
    #[Get('/admin/controller_386')]
    public function index_386(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_386/show/{?id}')]
    public function show_386(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_386/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_386/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_386/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_386/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_386/{id}/delete')]
    public function delete($id)
    {

    }
}