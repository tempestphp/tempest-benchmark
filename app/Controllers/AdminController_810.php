<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_810
{
    #[Get('/admin/controller_810')]
    public function index_810(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_810/show/{id}')]
    public function show_810(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_810/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_810/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_810/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_810/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_810/{id}/delete')]
    public function delete($id)
    {

    }
}