<?php

namespace App\Controllers;

use Tempest\Http\Responses\Ok;
use Tempest\Router\Get;
use Tempest\Router\Post;

final readonly class AdminController_963
{
    #[Get('/admin/controller_963')]
    public function index_963(): Ok
    {
        return new Ok();
    }

    #[Get('/admin/controller_963/show/{id}')]
    public function show_963(?string $id): Ok
    {
        return new Ok($id ?? 'empty');
    }

    #[Get('/admin/controller_963/create')]
    public function create($id)
    {

    }

    #[Post('/admin/controller_963/create')]
    public function store($id)
    {

    }

    #[Get('/admin/controller_963/{id}/edit')]
    public function edit($id)
    {

    }

    #[Post('/admin/controller_963/{id}/edit')]
    public function update($id)
    {

    }

    #[Post('/admin/controller_963/{id}/delete')]
    public function delete($id)
    {

    }
}