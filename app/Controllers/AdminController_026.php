<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_026
{
    #[Get('/admin/controller_026')]
    public function index_026(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_026/show/{id}')]
    public function show_026(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_026/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_026/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_026/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_026/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_026/{id}/delete')]
    public function delete($id)
    {

    }
}