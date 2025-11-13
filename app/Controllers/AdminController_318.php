<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_318
{
    #[Get('/admin/controller_318')]
    public function index_318(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_318/show/{?id}')]
    public function show_318(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_318/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_318/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_318/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_318/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_318/{id}/delete')]
    public function delete($id)
    {

    }
}