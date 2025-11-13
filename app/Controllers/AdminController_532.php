<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_532
{
    #[Get('/admin/controller_532')]
    public function index_532()
    {

    }

    #[Get('/admin/controller_532/show/{?id}')]
    public function show_532(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_532/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_532/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_532/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_532/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_532/{id}/delete')]
    public function delete($id)
    {

    }
}