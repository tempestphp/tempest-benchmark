<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_998
{
    #[Get('/admin/controller_998')]
    public function index_998()
    {

    }

    #[Get('/admin/controller_998/show/{?id}')]
    public function show_998(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_998/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_998/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_998/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_998/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_998/{id}/delete')]
    public function delete($id)
    {

    }
}