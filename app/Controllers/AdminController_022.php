<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_022
{
    #[Get('/admin/controller_022')]
    public function index_022()
    {

    }

    #[Get('/admin/controller_022/show/{?id}')]
    public function show_022(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_022/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_022/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_022/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_022/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_022/{id}/delete')]
    public function delete($id)
    {

    }
}