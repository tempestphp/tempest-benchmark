<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_328
{
    #[Get('/admin/controller_328')]
    public function index_328(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_328/show/{?id}')]
    public function show_328(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_328/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_328/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_328/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_328/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_328/{id}/delete')]
    public function delete($id)
    {

    }
}