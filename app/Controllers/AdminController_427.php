<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_427
{
    #[Get('/admin/controller_427')]
    public function index_427(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_427/show/{id}')]
    public function show_427(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_427/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_427/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_427/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_427/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_427/{id}/delete')]
    public function delete($id)
    {

    }
}