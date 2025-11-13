<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_634
{
    #[Get('/admin/controller_634')]
    public function index_634()
    {

    }

    #[Get('/admin/controller_634/show/{?id}')]
    public function show_634(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_634/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_634/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_634/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_634/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_634/{id}/delete')]
    public function delete($id)
    {

    }
}