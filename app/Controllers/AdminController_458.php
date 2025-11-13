<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_458
{
    #[Get('/admin/controller_458')]
    public function index_458()
    {

    }

    #[Get('/admin/controller_458/show/{?id}')]
    public function show_458(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_458/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_458/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_458/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_458/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_458/{id}/delete')]
    public function delete($id)
    {

    }
}