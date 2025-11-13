<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_350
{
    #[Get('/admin/controller_350')]
    public function index_350(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_350/show/{id}')]
    public function show_350(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_350/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_350/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_350/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_350/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_350/{id}/delete')]
    public function delete($id)
    {

    }
}