<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_751
{
    #[Get('/admin/controller_751')]
    public function index_751(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_751/show/{?id}')]
    public function show_751(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_751/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_751/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_751/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_751/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_751/{id}/delete')]
    public function delete($id)
    {

    }
}