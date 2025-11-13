<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_765
{
    #[Get('/admin/controller_765')]
    public function index_765(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_765/show/{id}')]
    public function show_765(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_765/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_765/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_765/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_765/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_765/{id}/delete')]
    public function delete($id)
    {

    }
}