<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_440
{
    #[Get('/admin/controller_440')]
    public function index_440()
    {

    }

    #[Get('/admin/controller_440/show/{?id}')]
    public function show_440(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_440/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_440/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_440/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_440/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_440/{id}/delete')]
    public function delete($id)
    {

    }
}