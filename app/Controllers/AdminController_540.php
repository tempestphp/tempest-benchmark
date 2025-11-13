<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_540
{
    #[Get('/admin/controller_540')]
    public function index_540(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_540/show/{id}')]
    public function show_540(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_540/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_540/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_540/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_540/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_540/{id}/delete')]
    public function delete($id)
    {

    }
}