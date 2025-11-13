<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_039
{
    #[Get('/admin/controller_039')]
    public function index_039()
    {

    }

    #[Get('/admin/controller_039/show/{?id}')]
    public function show_039(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_039/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_039/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_039/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_039/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_039/{id}/delete')]
    public function delete($id)
    {

    }
}