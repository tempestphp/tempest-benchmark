<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_469
{
    #[Get('/admin/controller_469')]
    public function index_469(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_469/show/{id}')]
    public function show_469(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_469/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_469/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_469/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_469/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_469/{id}/delete')]
    public function delete($id)
    {

    }
}