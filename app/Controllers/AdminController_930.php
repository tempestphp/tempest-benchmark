<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_930
{
    #[Get('/admin/controller_930')]
    public function index_930(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_930/show/{id}')]
    public function show_930(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_930/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_930/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_930/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_930/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_930/{id}/delete')]
    public function delete($id)
    {

    }
}