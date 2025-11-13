<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_180
{
    #[Get('/admin/controller_180')]
    public function index_180(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_180/show/{?id}')]
    public function show_180(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_180/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_180/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_180/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_180/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_180/{id}/delete')]
    public function delete($id)
    {

    }
}