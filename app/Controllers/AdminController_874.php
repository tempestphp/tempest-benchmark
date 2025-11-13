<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_874
{
    #[Get('/admin/controller_874')]
    public function index_874(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_874/show/{id}')]
    public function show_874(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_874/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_874/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_874/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_874/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_874/{id}/delete')]
    public function delete($id)
    {

    }
}