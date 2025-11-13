<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_608
{
    #[Get('/admin/controller_608')]
    public function index_608(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_608/show/{id}')]
    public function show_608(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_608/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_608/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_608/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_608/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_608/{id}/delete')]
    public function delete($id)
    {

    }
}