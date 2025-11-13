<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_145
{
    #[Get('/admin/controller_145')]
    public function index_145(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_145/show/{id}')]
    public function show_145(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_145/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_145/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_145/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_145/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_145/{id}/delete')]
    public function delete($id)
    {

    }
}