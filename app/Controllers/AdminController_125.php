<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_125
{
    #[Get('/admin/controller_125')]
    public function index_125()
    {

    }

    #[Get('/admin/controller_125/show/{?id}')]
    public function show_125(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_125/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_125/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_125/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_125/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_125/{id}/delete')]
    public function delete($id)
    {

    }
}