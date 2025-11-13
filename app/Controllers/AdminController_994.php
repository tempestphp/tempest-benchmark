<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_994
{
    #[Get('/admin/controller_994')]
    public function index_994(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_994/show/{id}')]
    public function show_994(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_994/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_994/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_994/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_994/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_994/{id}/delete')]
    public function delete($id)
    {

    }
}