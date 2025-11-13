<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_645
{
    #[Get('/admin/controller_645')]
    public function index_645(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_645/show/{?id}')]
    public function show_645(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_645/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_645/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_645/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_645/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_645/{id}/delete')]
    public function delete($id)
    {

    }
}