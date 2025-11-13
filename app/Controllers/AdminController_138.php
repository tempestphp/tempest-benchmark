<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_138
{
    #[Get('/admin/controller_138')]
    public function index_138()
    {

    }

    #[Get('/admin/controller_138/show/{?id}')]
    public function show_138(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_138/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_138/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_138/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_138/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_138/{id}/delete')]
    public function delete($id)
    {

    }
}