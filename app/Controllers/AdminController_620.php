<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_620
{
    #[Get('/admin/controller_620')]
    public function index_620(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_620/show/{?id}')]
    public function show_620(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_620/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_620/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_620/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_620/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_620/{id}/delete')]
    public function delete($id)
    {

    }
}