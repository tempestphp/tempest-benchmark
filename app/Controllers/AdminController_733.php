<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_733
{
    #[Get('/admin/controller_733')]
    public function index_733(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_733/show/{id}')]
    public function show_733(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_733/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_733/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_733/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_733/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_733/{id}/delete')]
    public function delete($id)
    {

    }
}