<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_137
{
    #[Get('/admin/controller_137')]
    public function index_137()
    {

    }

    #[Get('/admin/controller_137/show/{?id}')]
    public function show_137(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_137/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_137/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_137/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_137/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_137/{id}/delete')]
    public function delete($id)
    {

    }
}