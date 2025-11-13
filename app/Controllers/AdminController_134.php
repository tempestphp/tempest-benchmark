<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_134
{
    #[Get('/admin/controller_134')]
    public function index_134(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_134/show/{id}')]
    public function show_134(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_134/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_134/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_134/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_134/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_134/{id}/delete')]
    public function delete($id)
    {

    }
}