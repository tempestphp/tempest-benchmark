<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_896
{
    #[Get('/admin/controller_896')]
    public function index_896(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_896/show/{id}')]
    public function show_896(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_896/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_896/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_896/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_896/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_896/{id}/delete')]
    public function delete($id)
    {

    }
}