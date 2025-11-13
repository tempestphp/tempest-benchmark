<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_962
{
    #[Get('/admin/controller_962')]
    public function index_962(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_962/show/{?id}')]
    public function show_962(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_962/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_962/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_962/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_962/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_962/{id}/delete')]
    public function delete($id)
    {

    }
}