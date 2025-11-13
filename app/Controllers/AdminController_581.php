<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_581
{
    #[Get('/admin/controller_581')]
    public function index_581(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_581/show/{?id}')]
    public function show_581(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_581/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_581/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_581/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_581/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_581/{id}/delete')]
    public function delete($id)
    {

    }
}