<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_838
{
    #[Get('/admin/controller_838')]
    public function index_838(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_838/show/{?id}')]
    public function show_838(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_838/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_838/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_838/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_838/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_838/{id}/delete')]
    public function delete($id)
    {

    }
}