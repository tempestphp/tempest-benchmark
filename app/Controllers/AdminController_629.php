<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_629
{
    #[Get('/admin/controller_629')]
    public function index_629(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_629/show/{id}')]
    public function show_629(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_629/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_629/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_629/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_629/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_629/{id}/delete')]
    public function delete($id)
    {

    }
}