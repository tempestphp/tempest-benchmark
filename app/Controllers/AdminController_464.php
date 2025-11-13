<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_464
{
    #[Get('/admin/controller_464')]
    public function index_464(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_464/show/{id}')]
    public function show_464(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_464/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_464/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_464/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_464/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_464/{id}/delete')]
    public function delete($id)
    {

    }
}