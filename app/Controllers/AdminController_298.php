<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_298
{
    #[Get('/admin/controller_298')]
    public function index_298()
    {

    }

    #[Get('/admin/controller_298/show/{?id}')]
    public function show_298(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_298/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_298/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_298/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_298/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_298/{id}/delete')]
    public function delete($id)
    {

    }
}