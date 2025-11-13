<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_860
{
    #[Get('/admin/controller_860')]
    public function index_860(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_860/show/{id}')]
    public function show_860(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_860/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_860/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_860/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_860/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_860/{id}/delete')]
    public function delete($id)
    {

    }
}