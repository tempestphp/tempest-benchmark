<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_203
{
    #[Get('/admin/controller_203')]
    public function index_203(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_203/show/{?id}')]
    public function show_203(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_203/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_203/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_203/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_203/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_203/{id}/delete')]
    public function delete($id)
    {

    }
}