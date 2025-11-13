<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_148
{
    #[Get('/admin/controller_148')]
    public function index_148(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_148/show/{?id}')]
    public function show_148(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_148/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_148/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_148/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_148/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_148/{id}/delete')]
    public function delete($id)
    {

    }
}