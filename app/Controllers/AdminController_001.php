<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_001
{
    #[Get('/admin/controller_001')]
    public function index_001(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_001/show/{id}')]
    public function show_001(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_001/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_001/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_001/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_001/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_001/{id}/delete')]
    public function delete($id)
    {

    }
}