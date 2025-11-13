<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_989
{
    #[Get('/admin/controller_989')]
    public function index_989()
    {

    }

    #[Get('/admin/controller_989/show/{?id}')]
    public function show_989(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_989/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_989/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_989/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_989/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_989/{id}/delete')]
    public function delete($id)
    {

    }
}