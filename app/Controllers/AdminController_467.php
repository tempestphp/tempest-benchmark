<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_467
{
    #[Get('/admin/controller_467')]
    public function index_467(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_467/show/{?id}')]
    public function show_467(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_467/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_467/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_467/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_467/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_467/{id}/delete')]
    public function delete($id)
    {

    }
}