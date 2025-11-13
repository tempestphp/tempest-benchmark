<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_554
{
    #[Get('/admin/controller_554')]
    public function index_554()
    {

    }

    #[Get('/admin/controller_554/show/{?id}')]
    public function show_554(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_554/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_554/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_554/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_554/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_554/{id}/delete')]
    public function delete($id)
    {

    }
}