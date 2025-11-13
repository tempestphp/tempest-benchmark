<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_601
{
    #[Get('/admin/controller_601')]
    public function index_601(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_601/show/{?id}')]
    public function show_601(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_601/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_601/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_601/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_601/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_601/{id}/delete')]
    public function delete($id)
    {

    }
}