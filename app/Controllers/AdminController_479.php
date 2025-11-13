<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_479
{
    #[Get('/admin/controller_479')]
    public function index_479(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_479/show/{?id}')]
    public function show_479(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_479/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_479/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_479/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_479/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_479/{id}/delete')]
    public function delete($id)
    {

    }
}