<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_035
{
    #[Get('/admin/controller_035')]
    public function index_035(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_035/show/{id}')]
    public function show_035(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_035/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_035/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_035/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_035/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_035/{id}/delete')]
    public function delete($id)
    {

    }
}