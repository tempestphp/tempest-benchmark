<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_868
{
    #[Get('/admin/controller_868')]
    public function index_868(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_868/show/{id}')]
    public function show_868(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_868/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_868/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_868/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_868/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_868/{id}/delete')]
    public function delete($id)
    {

    }
}