<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_287
{
    #[Get('/admin/controller_287')]
    public function index_287(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_287/show/{?id}')]
    public function show_287(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_287/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_287/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_287/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_287/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_287/{id}/delete')]
    public function delete($id)
    {

    }
}