<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_644
{
    #[Get('/admin/controller_644')]
    public function index_644()
    {

    }

    #[Get('/admin/controller_644/show/{?id}')]
    public function show_644(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_644/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_644/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_644/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_644/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_644/{id}/delete')]
    public function delete($id)
    {

    }
}