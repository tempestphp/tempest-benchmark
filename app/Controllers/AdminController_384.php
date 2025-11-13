<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_384
{
    #[Get('/admin/controller_384')]
    public function index_384(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_384/show/{?id}')]
    public function show_384(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_384/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_384/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_384/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_384/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_384/{id}/delete')]
    public function delete($id)
    {

    }
}