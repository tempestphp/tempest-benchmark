<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_424
{
    #[Get('/admin/controller_424')]
    public function index_424(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_424/show/{id}')]
    public function show_424(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_424/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_424/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_424/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_424/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_424/{id}/delete')]
    public function delete($id)
    {

    }
}