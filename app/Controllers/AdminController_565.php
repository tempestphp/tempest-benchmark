<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_565
{
    #[Get('/admin/controller_565')]
    public function index_565()
    {

    }

    #[Get('/admin/controller_565/show/{?id}')]
    public function show_565(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_565/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_565/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_565/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_565/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_565/{id}/delete')]
    public function delete($id)
    {

    }
}