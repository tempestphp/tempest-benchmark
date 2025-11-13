<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_385
{
    #[Get('/admin/controller_385')]
    public function index_385(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_385/show/{?id}')]
    public function show_385(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_385/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_385/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_385/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_385/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_385/{id}/delete')]
    public function delete($id)
    {

    }
}