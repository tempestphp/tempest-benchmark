<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_716
{
    #[Get('/admin/controller_716')]
    public function index_716()
    {

    }

    #[Get('/admin/controller_716/show/{?id}')]
    public function show_716(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_716/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_716/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_716/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_716/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_716/{id}/delete')]
    public function delete($id)
    {

    }
}