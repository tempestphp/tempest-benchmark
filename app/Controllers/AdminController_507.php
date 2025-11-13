<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_507
{
    #[Get('/admin/controller_507')]
    public function index_507(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_507/show/{id}')]
    public function show_507(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_507/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_507/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_507/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_507/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_507/{id}/delete')]
    public function delete($id)
    {

    }
}