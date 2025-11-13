<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_924
{
    #[Get('/admin/controller_924')]
    public function index_924()
    {

    }

    #[Get('/admin/controller_924/show/{?id}')]
    public function show_924(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_924/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_924/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_924/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_924/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_924/{id}/delete')]
    public function delete($id)
    {

    }
}