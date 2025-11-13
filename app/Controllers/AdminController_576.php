<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_576
{
    #[Get('/admin/controller_576')]
    public function index_576()
    {

    }

    #[Get('/admin/controller_576/show/{?id}')]
    public function show_576(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_576/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_576/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_576/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_576/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_576/{id}/delete')]
    public function delete($id)
    {

    }
}