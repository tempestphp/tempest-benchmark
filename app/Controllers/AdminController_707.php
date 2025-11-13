<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_707
{
    #[Get('/admin/controller_707')]
    public function index_707(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_707/show/{id}')]
    public function show_707(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_707/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_707/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_707/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_707/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_707/{id}/delete')]
    public function delete($id)
    {

    }
}