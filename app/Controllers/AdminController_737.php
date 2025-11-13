<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_737
{
    #[Get('/admin/controller_737')]
    public function index_737(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_737/show/{id}')]
    public function show_737(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_737/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_737/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_737/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_737/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_737/{id}/delete')]
    public function delete($id)
    {

    }
}