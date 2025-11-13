<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_908
{
    #[Get('/admin/controller_908')]
    public function index_908()
    {

    }

    #[Get('/admin/controller_908/show/{?id}')]
    public function show_908(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_908/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_908/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_908/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_908/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_908/{id}/delete')]
    public function delete($id)
    {

    }
}