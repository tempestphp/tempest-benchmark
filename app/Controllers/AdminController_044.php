<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_044
{
    #[Get('/admin/controller_044')]
    public function index_044(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_044/show/{id}')]
    public function show_044(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_044/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_044/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_044/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_044/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_044/{id}/delete')]
    public function delete($id)
    {

    }
}