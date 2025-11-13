<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_347
{
    #[Get('/admin/controller_347')]
    public function index_347(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_347/show/{id}')]
    public function show_347(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_347/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_347/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_347/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_347/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_347/{id}/delete')]
    public function delete($id)
    {

    }
}