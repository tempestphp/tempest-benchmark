<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_552
{
    #[Get('/admin/controller_552')]
    public function index_552(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_552/show/{?id}')]
    public function show_552(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_552/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_552/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_552/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_552/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_552/{id}/delete')]
    public function delete($id)
    {

    }
}