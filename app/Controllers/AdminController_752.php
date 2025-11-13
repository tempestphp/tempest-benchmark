<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_752
{
    #[Get('/admin/controller_752')]
    public function index_752(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_752/show/{?id}')]
    public function show_752(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_752/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_752/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_752/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_752/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_752/{id}/delete')]
    public function delete($id)
    {

    }
}