<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_358
{
    #[Get('/admin/controller_358')]
    public function index_358(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_358/show/{id}')]
    public function show_358(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_358/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_358/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_358/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_358/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_358/{id}/delete')]
    public function delete($id)
    {

    }
}