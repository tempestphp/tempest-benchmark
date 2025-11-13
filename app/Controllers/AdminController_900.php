<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_900
{
    #[Get('/admin/controller_900')]
    public function index_900()
    {

    }

    #[Get('/admin/controller_900/show/{?id}')]
    public function show_900(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_900/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_900/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_900/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_900/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_900/{id}/delete')]
    public function delete($id)
    {

    }
}