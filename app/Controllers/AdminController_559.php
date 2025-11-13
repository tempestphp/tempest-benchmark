<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_559
{
    #[Get('/admin/controller_559')]
    public function index_559()
    {

    }

    #[Get('/admin/controller_559/show/{?id}')]
    public function show_559(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_559/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_559/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_559/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_559/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_559/{id}/delete')]
    public function delete($id)
    {

    }
}