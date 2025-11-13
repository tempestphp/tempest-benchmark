<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_525
{
    #[Get('/admin/controller_525')]
    public function index_525(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_525/show/{?id}')]
    public function show_525(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_525/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_525/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_525/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_525/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_525/{id}/delete')]
    public function delete($id)
    {

    }
}