<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_592
{
    #[Get('/admin/controller_592')]
    public function index_592(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_592/show/{id}')]
    public function show_592(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_592/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_592/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_592/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_592/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_592/{id}/delete')]
    public function delete($id)
    {

    }
}