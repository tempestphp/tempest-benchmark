<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_744
{
    #[Get('/admin/controller_744')]
    public function index_744()
    {

    }

    #[Get('/admin/controller_744/show/{?id}')]
    public function show_744(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_744/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_744/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_744/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_744/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_744/{id}/delete')]
    public function delete($id)
    {

    }
}