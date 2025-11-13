<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_871
{
    #[Get('/admin/controller_871')]
    public function index_871(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_871/show/{id}')]
    public function show_871(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_871/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_871/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_871/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_871/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_871/{id}/delete')]
    public function delete($id)
    {

    }
}