<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_839
{
    #[Get('/admin/controller_839')]
    public function index_839(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_839/show/{?id}')]
    public function show_839(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_839/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_839/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_839/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_839/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_839/{id}/delete')]
    public function delete($id)
    {

    }
}