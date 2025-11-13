<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_632
{
    #[Get('/admin/controller_632')]
    public function index_632()
    {

    }

    #[Get('/admin/controller_632/show/{?id}')]
    public function show_632(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_632/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_632/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_632/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_632/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_632/{id}/delete')]
    public function delete($id)
    {

    }
}