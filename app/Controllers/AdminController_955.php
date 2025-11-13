<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_955
{
    #[Get('/admin/controller_955')]
    public function index_955(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_955/show/{id}')]
    public function show_955(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_955/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_955/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_955/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_955/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_955/{id}/delete')]
    public function delete($id)
    {

    }
}