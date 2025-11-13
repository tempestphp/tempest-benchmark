<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_076
{
    #[Get('/admin/controller_076')]
    public function index_076(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_076/show/{id}')]
    public function show_076(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_076/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_076/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_076/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_076/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_076/{id}/delete')]
    public function delete($id)
    {

    }
}