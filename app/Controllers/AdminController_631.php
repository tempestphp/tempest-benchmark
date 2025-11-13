<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_631
{
    #[Get('/admin/controller_631')]
    public function index_631()
    {

    }

    #[Get('/admin/controller_631/show/{?id}')]
    public function show_631(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_631/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_631/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_631/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_631/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_631/{id}/delete')]
    public function delete($id)
    {

    }
}