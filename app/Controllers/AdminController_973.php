<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_973
{
    #[Get('/admin/controller_973')]
    public function index_973(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_973/show/{id}')]
    public function show_973(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_973/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_973/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_973/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_973/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_973/{id}/delete')]
    public function delete($id)
    {

    }
}