<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_938
{
    #[Get('/admin/controller_938')]
    public function index_938()
    {

    }

    #[Get('/admin/controller_938/show/{?id}')]
    public function show_938(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_938/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_938/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_938/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_938/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_938/{id}/delete')]
    public function delete($id)
    {

    }
}