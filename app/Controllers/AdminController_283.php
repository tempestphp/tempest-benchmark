<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_283
{
    #[Get('/admin/controller_283')]
    public function index_283(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_283/show/{id}')]
    public function show_283(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_283/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_283/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_283/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_283/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_283/{id}/delete')]
    public function delete($id)
    {

    }
}