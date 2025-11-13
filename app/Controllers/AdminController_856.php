<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_856
{
    #[Get('/admin/controller_856')]
    public function index_856(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_856/show/{id}')]
    public function show_856(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_856/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_856/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_856/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_856/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_856/{id}/delete')]
    public function delete($id)
    {

    }
}