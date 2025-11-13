<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_569
{
    #[Get('/admin/controller_569')]
    public function index_569()
    {

    }

    #[Get('/admin/controller_569/show/{?id}')]
    public function show_569(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_569/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_569/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_569/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_569/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_569/{id}/delete')]
    public function delete($id)
    {

    }
}