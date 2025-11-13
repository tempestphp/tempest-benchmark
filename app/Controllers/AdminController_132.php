<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_132
{
    #[Get('/admin/controller_132')]
    public function index_132(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_132/show/{id}')]
    public function show_132(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_132/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_132/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_132/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_132/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_132/{id}/delete')]
    public function delete($id)
    {

    }
}