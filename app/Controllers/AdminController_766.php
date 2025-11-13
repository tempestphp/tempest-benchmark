<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_766
{
    #[Get('/admin/controller_766')]
    public function index_766()
    {

    }

    #[Get('/admin/controller_766/show/{?id}')]
    public function show_766(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_766/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_766/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_766/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_766/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_766/{id}/delete')]
    public function delete($id)
    {

    }
}