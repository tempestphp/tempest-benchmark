<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_665
{
    #[Get('/admin/controller_665')]
    public function index_665()
    {

    }

    #[Get('/admin/controller_665/show/{?id}')]
    public function show_665(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_665/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_665/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_665/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_665/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_665/{id}/delete')]
    public function delete($id)
    {

    }
}