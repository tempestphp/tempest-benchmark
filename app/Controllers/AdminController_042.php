<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_042
{
    #[Get('/admin/controller_042')]
    public function index_042()
    {

    }

    #[Get('/admin/controller_042/show/{?id}')]
    public function show_042(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_042/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_042/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_042/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_042/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_042/{id}/delete')]
    public function delete($id)
    {

    }
}