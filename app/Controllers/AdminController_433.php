<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_433
{
    #[Get('/admin/controller_433')]
    public function index_433(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_433/show/{id}')]
    public function show_433(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_433/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_433/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_433/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_433/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_433/{id}/delete')]
    public function delete($id)
    {

    }
}