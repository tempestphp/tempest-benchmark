<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_801
{
    #[Get('/admin/controller_801')]
    public function index_801(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_801/show/{id}')]
    public function show_801(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_801/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_801/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_801/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_801/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_801/{id}/delete')]
    public function delete($id)
    {

    }
}