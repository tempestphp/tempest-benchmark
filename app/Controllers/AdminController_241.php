<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_241
{
    #[Get('/admin/controller_241')]
    public function index_241()
    {

    }

    #[Get('/admin/controller_241/show/{?id}')]
    public function show_241(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_241/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_241/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_241/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_241/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_241/{id}/delete')]
    public function delete($id)
    {

    }
}