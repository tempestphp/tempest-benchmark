<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_942
{
    #[Get('/admin/controller_942')]
    public function index_942(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_942/show/{id}')]
    public function show_942(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_942/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_942/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_942/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_942/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_942/{id}/delete')]
    public function delete($id)
    {

    }
}