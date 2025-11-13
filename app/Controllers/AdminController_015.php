<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_015
{
    #[Get('/admin/controller_015')]
    public function index_015(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_015/show/{?id}')]
    public function show_015(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_015/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_015/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_015/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_015/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_015/{id}/delete')]
    public function delete($id)
    {

    }
}