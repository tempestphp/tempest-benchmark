<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_679
{
    #[Get('/admin/controller_679')]
    public function index_679(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_679/show/{id}')]
    public function show_679(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_679/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_679/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_679/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_679/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_679/{id}/delete')]
    public function delete($id)
    {

    }
}