<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_610
{
    #[Get('/admin/controller_610')]
    public function index_610(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_610/show/{?id}')]
    public function show_610(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_610/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_610/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_610/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_610/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_610/{id}/delete')]
    public function delete($id)
    {

    }
}