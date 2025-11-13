<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_002
{
    #[Get('/admin/controller_002')]
    public function index_002(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_002/show/{?id}')]
    public function show_002(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_002/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_002/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_002/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_002/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_002/{id}/delete')]
    public function delete($id)
    {

    }
}