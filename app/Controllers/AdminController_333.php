<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_333
{
    #[Get('/admin/controller_333')]
    public function index_333()
    {

    }

    #[Get('/admin/controller_333/show/{?id}')]
    public function show_333(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_333/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_333/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_333/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_333/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_333/{id}/delete')]
    public function delete($id)
    {

    }
}