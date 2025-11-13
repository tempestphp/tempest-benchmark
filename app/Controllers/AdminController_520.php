<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_520
{
    #[Get('/admin/controller_520')]
    public function index_520(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_520/show/{?id}')]
    public function show_520(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_520/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_520/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_520/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_520/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_520/{id}/delete')]
    public function delete($id)
    {

    }
}