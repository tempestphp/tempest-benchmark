<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_388
{
    #[Get('/admin/controller_388')]
    public function index_388()
    {

    }

    #[Get('/admin/controller_388/show/{?id}')]
    public function show_388(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_388/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_388/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_388/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_388/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_388/{id}/delete')]
    public function delete($id)
    {

    }
}