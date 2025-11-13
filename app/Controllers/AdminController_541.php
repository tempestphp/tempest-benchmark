<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_541
{
    #[Get('/admin/controller_541')]
    public function index_541(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_541/show/{?id}')]
    public function show_541(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_541/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_541/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_541/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_541/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_541/{id}/delete')]
    public function delete($id)
    {

    }
}