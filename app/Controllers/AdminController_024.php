<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_024
{
    #[Get('/admin/controller_024')]
    public function index_024()
    {

    }

    #[Get('/admin/controller_024/show/{?id}')]
    public function show_024(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_024/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_024/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_024/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_024/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_024/{id}/delete')]
    public function delete($id)
    {

    }
}