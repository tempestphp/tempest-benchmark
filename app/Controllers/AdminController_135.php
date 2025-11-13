<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_135
{
    #[Get('/admin/controller_135')]
    public function index_135()
    {

    }

    #[Get('/admin/controller_135/show/{?id}')]
    public function show_135(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_135/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_135/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_135/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_135/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_135/{id}/delete')]
    public function delete($id)
    {

    }
}