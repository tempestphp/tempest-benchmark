<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_460
{
    #[Get('/admin/controller_460')]
    public function index_460(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_460/show/{?id}')]
    public function show_460(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_460/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_460/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_460/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_460/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_460/{id}/delete')]
    public function delete($id)
    {

    }
}