<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_403
{
    #[Get('/admin/controller_403')]
    public function index_403()
    {

    }

    #[Get('/admin/controller_403/show/{?id}')]
    public function show_403(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_403/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_403/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_403/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_403/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_403/{id}/delete')]
    public function delete($id)
    {

    }
}