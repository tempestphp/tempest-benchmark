<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_099
{
    #[Get('/admin/controller_099')]
    public function index_099(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_099/show/{?id}')]
    public function show_099(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_099/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_099/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_099/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_099/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_099/{id}/delete')]
    public function delete($id)
    {

    }
}