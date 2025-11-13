<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_369
{
    #[Get('/admin/controller_369')]
    public function index_369(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_369/show/{id}')]
    public function show_369(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_369/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_369/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_369/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_369/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_369/{id}/delete')]
    public function delete($id)
    {

    }
}