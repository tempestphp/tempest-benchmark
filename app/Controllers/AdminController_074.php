<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_074
{
    #[Get('/admin/controller_074')]
    public function index_074(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_074/show/{?id}')]
    public function show_074(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_074/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_074/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_074/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_074/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_074/{id}/delete')]
    public function delete($id)
    {

    }
}