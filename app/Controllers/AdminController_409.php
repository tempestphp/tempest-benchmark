<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_409
{
    #[Get('/admin/controller_409')]
    public function index_409(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_409/show/{id}')]
    public function show_409(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_409/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_409/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_409/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_409/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_409/{id}/delete')]
    public function delete($id)
    {

    }
}