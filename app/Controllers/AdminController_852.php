<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_852
{
    #[Get('/admin/controller_852')]
    public function index_852(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_852/show/{?id}')]
    public function show_852(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_852/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_852/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_852/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_852/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_852/{id}/delete')]
    public function delete($id)
    {

    }
}