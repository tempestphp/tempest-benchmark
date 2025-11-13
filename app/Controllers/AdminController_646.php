<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_646
{
    #[Get('/admin/controller_646')]
    public function index_646(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_646/show/{?id}')]
    public function show_646(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_646/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_646/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_646/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_646/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_646/{id}/delete')]
    public function delete($id)
    {

    }
}