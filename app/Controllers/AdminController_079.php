<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_079
{
    #[Get('/admin/controller_079')]
    public function index_079(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_079/show/{?id}')]
    public function show_079(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_079/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_079/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_079/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_079/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_079/{id}/delete')]
    public function delete($id)
    {

    }
}