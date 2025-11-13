<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_670
{
    #[Get('/admin/controller_670')]
    public function index_670()
    {

    }

    #[Get('/admin/controller_670/show/{?id}')]
    public function show_670(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_670/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_670/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_670/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_670/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_670/{id}/delete')]
    public function delete($id)
    {

    }
}