<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_661
{
    #[Get('/admin/controller_661')]
    public function index_661()
    {

    }

    #[Get('/admin/controller_661/show/{?id}')]
    public function show_661(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_661/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_661/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_661/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_661/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_661/{id}/delete')]
    public function delete($id)
    {

    }
}