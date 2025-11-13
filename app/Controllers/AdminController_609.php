<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_609
{
    #[Get('/admin/controller_609')]
    public function index_609(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_609/show/{id}')]
    public function show_609(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_609/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_609/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_609/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_609/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_609/{id}/delete')]
    public function delete($id)
    {

    }
}