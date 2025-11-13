<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_010
{
    #[Get('/admin/controller_010')]
    public function index_010(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_010/show/{id}')]
    public function show_010(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_010/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_010/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_010/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_010/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_010/{id}/delete')]
    public function delete($id)
    {

    }
}