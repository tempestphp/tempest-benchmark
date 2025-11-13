<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_928
{
    #[Get('/admin/controller_928')]
    public function index_928(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_928/show/{?id}')]
    public function show_928(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_928/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_928/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_928/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_928/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_928/{id}/delete')]
    public function delete($id)
    {

    }
}