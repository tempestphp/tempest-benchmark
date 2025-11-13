<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_768
{
    #[Get('/admin/controller_768')]
    public function index_768()
    {

    }

    #[Get('/admin/controller_768/show/{?id}')]
    public function show_768(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_768/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_768/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_768/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_768/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_768/{id}/delete')]
    public function delete($id)
    {

    }
}