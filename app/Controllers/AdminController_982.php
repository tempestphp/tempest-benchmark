<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_982
{
    #[Get('/admin/controller_982')]
    public function index_982()
    {

    }

    #[Get('/admin/controller_982/show/{?id}')]
    public function show_982(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_982/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_982/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_982/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_982/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_982/{id}/delete')]
    public function delete($id)
    {

    }
}