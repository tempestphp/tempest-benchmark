<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_671
{
    #[Get('/admin/controller_671')]
    public function index_671(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_671/show/{?id}')]
    public function show_671(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_671/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_671/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_671/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_671/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_671/{id}/delete')]
    public function delete($id)
    {

    }
}