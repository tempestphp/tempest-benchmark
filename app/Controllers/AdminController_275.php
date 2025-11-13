<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_275
{
    #[Get('/admin/controller_275')]
    public function index_275(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_275/show/{?id}')]
    public function show_275(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_275/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_275/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_275/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_275/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_275/{id}/delete')]
    public function delete($id)
    {

    }
}