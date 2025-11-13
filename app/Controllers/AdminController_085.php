<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_085
{
    #[Get('/admin/controller_085')]
    public function index_085(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_085/show/{id}')]
    public function show_085(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_085/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_085/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_085/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_085/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_085/{id}/delete')]
    public function delete($id)
    {

    }
}