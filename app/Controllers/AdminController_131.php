<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_131
{
    #[Get('/admin/controller_131')]
    public function index_131(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_131/show/{?id}')]
    public function show_131(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_131/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_131/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_131/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_131/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_131/{id}/delete')]
    public function delete($id)
    {

    }
}