<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_503
{
    #[Get('/admin/controller_503')]
    public function index_503(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_503/show/{id}')]
    public function show_503(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_503/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_503/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_503/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_503/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_503/{id}/delete')]
    public function delete($id)
    {

    }
}