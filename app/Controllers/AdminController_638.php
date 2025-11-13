<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_638
{
    #[Get('/admin/controller_638')]
    public function index_638(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_638/show/{?id}')]
    public function show_638(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_638/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_638/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_638/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_638/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_638/{id}/delete')]
    public function delete($id)
    {

    }
}