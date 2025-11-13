<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_923
{
    #[Get('/admin/controller_923')]
    public function index_923()
    {

    }

    #[Get('/admin/controller_923/show/{?id}')]
    public function show_923(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_923/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_923/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_923/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_923/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_923/{id}/delete')]
    public function delete($id)
    {

    }
}