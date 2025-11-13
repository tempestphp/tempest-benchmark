<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_721
{
    #[Get('/admin/controller_721')]
    public function index_721(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_721/show/{id}')]
    public function show_721(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_721/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_721/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_721/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_721/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_721/{id}/delete')]
    public function delete($id)
    {

    }
}