<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_173
{
    #[Get('/admin/controller_173')]
    public function index_173()
    {

    }

    #[Get('/admin/controller_173/show/{?id}')]
    public function show_173(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_173/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_173/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_173/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_173/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_173/{id}/delete')]
    public function delete($id)
    {

    }
}