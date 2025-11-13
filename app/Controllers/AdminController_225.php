<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_225
{
    #[Get('/admin/controller_225')]
    public function index_225()
    {

    }

    #[Get('/admin/controller_225/show/{?id}')]
    public function show_225(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_225/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_225/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_225/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_225/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_225/{id}/delete')]
    public function delete($id)
    {

    }
}