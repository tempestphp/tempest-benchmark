<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_618
{
    #[Get('/admin/controller_618')]
    public function index_618()
    {

    }

    #[Get('/admin/controller_618/show/{?id}')]
    public function show_618(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_618/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_618/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_618/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_618/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_618/{id}/delete')]
    public function delete($id)
    {

    }
}