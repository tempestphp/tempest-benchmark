<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_214
{
    #[Get('/admin/controller_214')]
    public function index_214()
    {

    }

    #[Get('/admin/controller_214/show/{?id}')]
    public function show_214(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_214/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_214/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_214/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_214/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_214/{id}/delete')]
    public function delete($id)
    {

    }
}