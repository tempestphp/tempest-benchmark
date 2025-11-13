<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_919
{
    #[Get('/admin/controller_919')]
    public function index_919(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_919/show/{?id}')]
    public function show_919(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_919/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_919/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_919/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_919/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_919/{id}/delete')]
    public function delete($id)
    {

    }
}