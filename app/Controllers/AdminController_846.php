<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_846
{
    #[Get('/admin/controller_846')]
    public function index_846()
    {

    }

    #[Get('/admin/controller_846/show/{?id}')]
    public function show_846(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_846/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_846/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_846/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_846/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_846/{id}/delete')]
    public function delete($id)
    {

    }
}