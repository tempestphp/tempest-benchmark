<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_792
{
    #[Get('/admin/controller_792')]
    public function index_792(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_792/show/{id}')]
    public function show_792(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_792/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_792/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_792/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_792/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_792/{id}/delete')]
    public function delete($id)
    {

    }
}