<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_061
{
    #[Get('/admin/controller_061')]
    public function index_061(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_061/show/{id}')]
    public function show_061(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_061/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_061/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_061/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_061/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_061/{id}/delete')]
    public function delete($id)
    {

    }
}