<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_975
{
    #[Get('/admin/controller_975')]
    public function index_975(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_975/show/{?id}')]
    public function show_975(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_975/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_975/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_975/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_975/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_975/{id}/delete')]
    public function delete($id)
    {

    }
}