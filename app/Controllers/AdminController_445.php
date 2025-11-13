<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_445
{
    #[Get('/admin/controller_445')]
    public function index_445(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_445/show/{id}')]
    public function show_445(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_445/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_445/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_445/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_445/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_445/{id}/delete')]
    public function delete($id)
    {

    }
}