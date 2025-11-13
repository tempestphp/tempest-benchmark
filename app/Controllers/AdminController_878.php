<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_878
{
    #[Get('/admin/controller_878')]
    public function index_878()
    {

    }

    #[Get('/admin/controller_878/show/{?id}')]
    public function show_878(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_878/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_878/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_878/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_878/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_878/{id}/delete')]
    public function delete($id)
    {

    }
}