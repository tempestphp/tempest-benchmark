<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_421
{
    #[Get('/admin/controller_421')]
    public function index_421()
    {

    }

    #[Get('/admin/controller_421/show/{?id}')]
    public function show_421(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_421/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_421/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_421/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_421/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_421/{id}/delete')]
    public function delete($id)
    {

    }
}