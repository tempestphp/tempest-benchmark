<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_688
{
    #[Get('/admin/controller_688')]
    public function index_688()
    {

    }

    #[Get('/admin/controller_688/show/{?id}')]
    public function show_688(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_688/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_688/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_688/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_688/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_688/{id}/delete')]
    public function delete($id)
    {

    }
}