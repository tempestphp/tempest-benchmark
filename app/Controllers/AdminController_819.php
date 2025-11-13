<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_819
{
    #[Get('/admin/controller_819')]
    public function index_819(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_819/show/{?id}')]
    public function show_819(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_819/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_819/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_819/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_819/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_819/{id}/delete')]
    public function delete($id)
    {

    }
}