<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_037
{
    #[Get('/admin/controller_037')]
    public function index_037(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_037/show/{id}')]
    public function show_037(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_037/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_037/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_037/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_037/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_037/{id}/delete')]
    public function delete($id)
    {

    }
}