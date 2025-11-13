<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_505
{
    #[Get('/admin/controller_505')]
    public function index_505(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_505/show/{id}')]
    public function show_505(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_505/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_505/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_505/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_505/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_505/{id}/delete')]
    public function delete($id)
    {

    }
}