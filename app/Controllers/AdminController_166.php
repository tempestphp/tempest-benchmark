<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_166
{
    #[Get('/admin/controller_166')]
    public function index_166()
    {

    }

    #[Get('/admin/controller_166/show/{?id}')]
    public function show_166(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_166/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_166/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_166/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_166/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_166/{id}/delete')]
    public function delete($id)
    {

    }
}