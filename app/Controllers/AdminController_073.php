<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_073
{
    #[Get('/admin/controller_073')]
    public function index_073()
    {

    }

    #[Get('/admin/controller_073/show/{?id}')]
    public function show_073(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_073/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_073/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_073/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_073/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_073/{id}/delete')]
    public function delete($id)
    {

    }
}