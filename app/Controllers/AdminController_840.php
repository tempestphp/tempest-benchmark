<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_840
{
    #[Get('/admin/controller_840')]
    public function index_840()
    {

    }

    #[Get('/admin/controller_840/show/{?id}')]
    public function show_840(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_840/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_840/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_840/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_840/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_840/{id}/delete')]
    public function delete($id)
    {

    }
}