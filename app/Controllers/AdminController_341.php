<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_341
{
    #[Get('/admin/controller_341')]
    public function index_341(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_341/show/{id}')]
    public function show_341(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_341/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_341/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_341/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_341/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_341/{id}/delete')]
    public function delete($id)
    {

    }
}