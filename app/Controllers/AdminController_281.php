<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_281
{
    #[Get('/admin/controller_281')]
    public function index_281()
    {

    }

    #[Get('/admin/controller_281/show/{?id}')]
    public function show_281(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_281/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_281/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_281/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_281/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_281/{id}/delete')]
    public function delete($id)
    {

    }
}