<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_407
{
    #[Get('/admin/controller_407')]
    public function index_407(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_407/show/{id}')]
    public function show_407(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_407/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_407/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_407/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_407/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_407/{id}/delete')]
    public function delete($id)
    {

    }
}