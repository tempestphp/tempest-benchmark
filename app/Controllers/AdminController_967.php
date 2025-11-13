<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_967
{
    #[Get('/admin/controller_967')]
    public function index_967(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_967/show/{id}')]
    public function show_967(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_967/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_967/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_967/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_967/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_967/{id}/delete')]
    public function delete($id)
    {

    }
}