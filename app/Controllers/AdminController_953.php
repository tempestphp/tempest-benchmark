<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_953
{
    #[Get('/admin/controller_953')]
    public function index_953()
    {

    }

    #[Get('/admin/controller_953/show/{?id}')]
    public function show_953(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_953/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_953/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_953/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_953/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_953/{id}/delete')]
    public function delete($id)
    {

    }
}