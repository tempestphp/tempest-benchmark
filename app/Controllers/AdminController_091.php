<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_091
{
    #[Get('/admin/controller_091')]
    public function index_091()
    {

    }

    #[Get('/admin/controller_091/show/{?id}')]
    public function show_091(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_091/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_091/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_091/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_091/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_091/{id}/delete')]
    public function delete($id)
    {

    }
}