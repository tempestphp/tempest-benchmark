<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_321
{
    #[Get('/admin/controller_321')]
    public function index_321()
    {

    }

    #[Get('/admin/controller_321/show/{?id}')]
    public function show_321(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_321/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_321/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_321/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_321/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_321/{id}/delete')]
    public function delete($id)
    {

    }
}