<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_884
{
    #[Get('/admin/controller_884')]
    public function index_884(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_884/show/{?id}')]
    public function show_884(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_884/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_884/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_884/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_884/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_884/{id}/delete')]
    public function delete($id)
    {

    }
}