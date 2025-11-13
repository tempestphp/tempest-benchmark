<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_364
{
    #[Get('/admin/controller_364')]
    public function index_364(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_364/show/{?id}')]
    public function show_364(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_364/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_364/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_364/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_364/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_364/{id}/delete')]
    public function delete($id)
    {

    }
}