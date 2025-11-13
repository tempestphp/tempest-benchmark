<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_866
{
    #[Get('/admin/controller_866')]
    public function index_866(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_866/show/{id}')]
    public function show_866(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_866/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_866/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_866/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_866/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_866/{id}/delete')]
    public function delete($id)
    {

    }
}