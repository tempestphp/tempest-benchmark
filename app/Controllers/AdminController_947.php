<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_947
{
    #[Get('/admin/controller_947')]
    public function index_947(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_947/show/{id}')]
    public function show_947(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_947/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_947/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_947/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_947/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_947/{id}/delete')]
    public function delete($id)
    {

    }
}