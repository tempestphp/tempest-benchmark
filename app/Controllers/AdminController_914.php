<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_914
{
    #[Get('/admin/controller_914')]
    public function index_914()
    {

    }

    #[Get('/admin/controller_914/show/{?id}')]
    public function show_914(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_914/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_914/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_914/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_914/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_914/{id}/delete')]
    public function delete($id)
    {

    }
}