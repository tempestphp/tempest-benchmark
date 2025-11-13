<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_025
{
    #[Get('/admin/controller_025')]
    public function index_025()
    {

    }

    #[Get('/admin/controller_025/show/{?id}')]
    public function show_025(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_025/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_025/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_025/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_025/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_025/{id}/delete')]
    public function delete($id)
    {

    }
}