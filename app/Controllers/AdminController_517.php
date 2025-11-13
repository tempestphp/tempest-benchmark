<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_517
{
    #[Get('/admin/controller_517')]
    public function index_517()
    {

    }

    #[Get('/admin/controller_517/show/{?id}')]
    public function show_517(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_517/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_517/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_517/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_517/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_517/{id}/delete')]
    public function delete($id)
    {

    }
}