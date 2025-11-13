<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_795
{
    #[Get('/admin/controller_795')]
    public function index_795()
    {

    }

    #[Get('/admin/controller_795/show/{?id}')]
    public function show_795(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_795/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_795/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_795/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_795/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_795/{id}/delete')]
    public function delete($id)
    {

    }
}