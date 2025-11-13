<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_950
{
    #[Get('/admin/controller_950')]
    public function index_950()
    {

    }

    #[Get('/admin/controller_950/show/{?id}')]
    public function show_950(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_950/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_950/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_950/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_950/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_950/{id}/delete')]
    public function delete($id)
    {

    }
}