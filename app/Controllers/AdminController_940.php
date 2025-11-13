<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_940
{
    #[Get('/admin/controller_940')]
    public function index_940(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_940/show/{?id}')]
    public function show_940(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_940/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_940/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_940/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_940/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_940/{id}/delete')]
    public function delete($id)
    {

    }
}