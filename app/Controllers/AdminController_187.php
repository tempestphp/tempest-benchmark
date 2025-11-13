<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_187
{
    #[Get('/admin/controller_187')]
    public function index_187(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_187/show/{?id}')]
    public function show_187(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_187/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_187/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_187/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_187/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_187/{id}/delete')]
    public function delete($id)
    {

    }
}