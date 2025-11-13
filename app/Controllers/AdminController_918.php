<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_918
{
    #[Get('/admin/controller_918')]
    public function index_918()
    {

    }

    #[Get('/admin/controller_918/show/{?id}')]
    public function show_918(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_918/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_918/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_918/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_918/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_918/{id}/delete')]
    public function delete($id)
    {

    }
}