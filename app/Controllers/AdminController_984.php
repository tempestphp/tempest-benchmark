<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_984
{
    #[Get('/admin/controller_984')]
    public function index_984(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_984/show/{id}')]
    public function show_984(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_984/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_984/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_984/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_984/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_984/{id}/delete')]
    public function delete($id)
    {

    }
}