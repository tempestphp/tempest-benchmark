<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_972
{
    #[Get('/admin/controller_972')]
    public function index_972(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_972/show/{id}')]
    public function show_972(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_972/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_972/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_972/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_972/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_972/{id}/delete')]
    public function delete($id)
    {

    }
}