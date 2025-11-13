<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_307
{
    #[Get('/admin/controller_307')]
    public function index_307(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_307/show/{?id}')]
    public function show_307(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_307/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_307/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_307/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_307/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_307/{id}/delete')]
    public function delete($id)
    {

    }
}