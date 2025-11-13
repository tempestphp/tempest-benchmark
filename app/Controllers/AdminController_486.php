<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_486
{
    #[Get('/admin/controller_486')]
    public function index_486()
    {

    }

    #[Get('/admin/controller_486/show/{?id}')]
    public function show_486(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_486/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_486/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_486/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_486/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_486/{id}/delete')]
    public function delete($id)
    {

    }
}