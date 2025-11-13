<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_705
{
    #[Get('/admin/controller_705')]
    public function index_705()
    {

    }

    #[Get('/admin/controller_705/show/{?id}')]
    public function show_705(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_705/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_705/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_705/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_705/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_705/{id}/delete')]
    public function delete($id)
    {

    }
}