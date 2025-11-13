<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_082
{
    #[Get('/admin/controller_082')]
    public function index_082()
    {

    }

    #[Get('/admin/controller_082/show/{?id}')]
    public function show_082(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_082/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_082/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_082/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_082/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_082/{id}/delete')]
    public function delete($id)
    {

    }
}